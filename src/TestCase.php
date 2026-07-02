<?php

namespace HexletBasics\Exercise;

use PHPUnit\Framework\TestCase as BaseTestCase;
use ReflectionObject;

/**
 * Базовый класс тестов упражнений.
 *
 * Подключает решение студента (Solution.php) и следит за тем, чтобы напечатанный
 * им результат попадал на панель «вывод». Панель показывает дословный stdout
 * команды `make test`, поэтому вывод решения нужно не только сверить с ожидаемым,
 * но и явно вернуть в реальный stdout — в обход буферизации PHPUnit.
 */
abstract class TestCase extends BaseTestCase
{
    /**
     * Вывод, напечатанный решением на верхнем уровне при подключении Solution.php.
     */
    protected string $solutionOutput = '';

    /**
     * Подключает решение студента и перехватывает его вывод.
     *
     * require Solution.php оборачивается в собственный буфер вывода: напечатанное
     * сохраняется в {@see self::$solutionOutput} и сразу же печатается в настоящий
     * stdout через fwrite(STDOUT, ...), чтобы студент увидел результат на панели
     * «вывод». Перехват идёт в отдельный буфер (а не в буфер PHPUnit) — иначе
     * PHPUnit счёл бы вывод «рискованным» при failOnRisky.
     */
    protected function setUp(): void
    {
        parent::setUp();

        $solutionPath = dirname((new ReflectionObject($this))->getFileName()) . '/Solution.php';

        ob_start();
        require $solutionPath;
        $this->solutionOutput = (string) ob_get_clean();

        if ($this->solutionOutput !== '') {
            fwrite(STDOUT, $this->solutionOutput . "\n");
        }
    }

    /**
     * Сверяет с ожидаемым вывод, напечатанный решением на верхнем уровне Solution.php.
     *
     * Подходит для большинства уроков, где решение печатает результат сразу при
     * подключении файла (вывод уже перехвачен в {@see self::setUp()}).
     *
     * @param string $expected Ожидаемый вывод программы студента
     */
    protected function assertOutput(string $expected): void
    {
        $this->assertSame($expected, $this->solutionOutput);
    }

    /**
     * Сверяет с ожидаемым вывод, который решение печатает при вызове функции.
     *
     * Нужен для уроков, где Solution.php лишь ОБЪЯВЛЯЕТ функцию, а печать
     * происходит при её вызове из теста (а не при подключении файла). Перехватывает
     * вывод переданного вызова, печатает его на панель «вывод» и сверяет с ожидаемым.
     *
     * @param callable $callback Вызов решения, печатающий результат (например, fn () => sayHello())
     * @param string   $expected Ожидаемый вывод
     */
    protected function assertOutputOf(callable $callback, string $expected): void
    {
        ob_start();
        $callback();
        $output = (string) ob_get_clean();

        if ($output !== '') {
            fwrite(STDOUT, $output . "\n");
        }

        $this->assertSame($expected, $output);
    }
}
