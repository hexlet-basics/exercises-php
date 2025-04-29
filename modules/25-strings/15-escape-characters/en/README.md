
We want to show a dialogue between the Mother of Dragons and her child:

```
- Are you hungry?
- Aaaarrrgh!
```

If you display a line with this text on the screen:

```php
<?php

print_r("- Are you hungry?- Aaaarrrgh!");
```

it goes like this:

```
- Are you hungry?- Aaaarrrgh!
```

Not what we wanted. The lines are one after the other, not one below the other. We need to somehow tell the interpreter to "hit enter", i.e., to go to the next line after the question mark. This can be done by using the line feed character: `\n`.

```php
<?php

print_r("- Are you hungry?\n- Aaaarrrgh!");
```


result:

```
- Are you hungry?
- Aaaarrrgh!
```

`\n` is a special symbol. In the literature, it's often referred to as the *LF* (Line Feed). You may have thought now that it was a typo because here we can see two characters, `\` and `n`, but that's not the case. From the computer's perspective, this is one invisible line feed character. Proof:

```php
<?php

// We didn't study it, but you should know the truth
// Below is some code that returns the length of a string
strlen("a");    // 1
strlen("\n");   // 1 !!!
strlen("\n\n"); // 2 !!!
```

Why is this done? `\n` is just a way to write the line feed character, but the line feed itself is really just one character, it's simply invisible. That's why this challenge arose. It had to be represented somehow on the keyboard. And since the number of characters on the keyboard is limited and given to the most important, all special characters are implemented in the form of these signs.

The line feed character isn't something specific to programming. Anyone who has ever typed on a computer has used the line feed by hitting Enter. Many editors have an option to enable the display of invisible characters; you can use it to see where they are (although it's only displayed a schematic display, these characters would otherwise have no graphical representation, they're invisible):

<pre class='hexlet-basics-output'>
- Hey!¶
- Oh, hey!¶
- How's it going?
</pre>

The device that outputs the corresponding text takes this character into account. For example, the printer pulls the paper up one line when it encounters the LF, and the text editor pulls all subsequent text below, also by one line.

`\n` is an example of an **escape sequence**. They're also called control constructs. Although there are more than a dozen such characters, there are often only a few such characters in programming. In addition to line feeds, these can include tabs (the break you get when you press the Tab button) and carriage returns (only in Windows). We programmers often need to use line feed `\n` for proper text formatting.

```php
<?php

print_r("Gregor Clegane\nDunsen\nPolliver\nChiswyck");
```

**Warning! Escape sequences like `\n` only work inside double quotes!**

The screen will display:

<pre class='hexlet-basics-output'>
Gregor Clegane
Dunsen
Polliver
Chiswyck
</pre>

Note the following points:

1. It does not matter what comes before or after `\n`: a character or an empty string. The line feed will be spotted and executed in any case.

2. Remember that a string can contain a single character or zero characters. Also, a string can only contain `\n`. Analyze the following example:

    ```php
    <?php

    print_r('Gregor Clegane');
    print_r("\n");
    print_r('Dunsen');
    ```

    Here we output one string with a name, then one string with a line feed and then another string. The program will display this on the screen:

    <pre class='hexlet-basics-output'>
    Gregor Clegane
    Dunsen
    </pre>

3. If we need to output `\n` as text (two separate printable characters), we can use the escape method we already know, adding another `\` at the beginning. I.e., the sequence `\\n` will appear as the characters `\` and `n` following each other.

```php
<?php

print_r("Joffrey loves using \\n");
```

on the screen, you'll see:

<pre class='hexlet-basics-output'>
Joffrey loves using \n
</pre>

A small but important note about Windows. Windows uses `\r\n`. to do line feeds by default. This combination works well only in Windows, but creates problems when migrating to other systems (for example, when the development team has both Windows and Linux users). The point is that the sequence `\r\n` has a different interpretation depending on the chosen encoding (discussed later). For this reason, it's common among developers to always use `\n` without `\r`, since LF is always treated the same and works fine on any system. Remember to configure your editor to use `\n`.
