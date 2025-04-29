
Our site automatically checks your solutions. You may be wondering how it works.

In the simplest case, the system just runs the code and looks at what's displayed on the screen. Then it compares the actual output against the expected one.

In the future, more complicated lessons, you will write functions - mini-programs that take information from the external world and perform operations on it. Verifying solutions gets a little more complicated in this case. The system runs your code and passes data to it. The system knows what result a correctly written function would give with the data the system provides it with, and this result is what the system expects.

Let's assume your task is to program a function that adds two numbers together. The checking system will give it several combinations of numbers and compare your function's answers with the correct answers. If all actual values match the expected ones, your solution will be considered valid.

This is testing. It's used extensively in the real, day-to-day development process. Developers usually write the tests first, and only after that do they actually proceed to write the program itself. During that process, they run tests multiple times to check how close they are to the desired solution.

That is why our website says, “Tests passed” once you've done the exercise correctly.

Here's a simple example, say you want to print the string `Hello, World!`. Now imagine you make a small mistake and the function displays a different value. In that case, the system will give you the following message:

<pre class='hexlet-basics-output'>
  -'Hello, World!'
  +'ello, World!'

  FAILURES!
  Tests: 1, Assertions: 1, Failures: 1.
</pre>

A hint appears on the screen. The `+` sign on it indicates what your code printed. The `-` sign is what was expected. By comparing the two values, you can see the error. In the example above, you can see that the letter _H_ is missing from the output.

---

Sometimes, it'll seem that you've done everything correctly, but the system seems to be fickle and won't make a decision. It's nigh on impossible for the system to just decide that it's wrong. Failed tests simply won't get as far as the site, they're automatically run after each change. In the vast majority of cases (all our projects have been run millions of times in total over many years) the error is in the solution code. It can be very imperceptible, maybe you used the wrong punctuation, or you used upper case instead of lower case, or you missed a comma. Other cases are more complicated. Maybe your solution works for one set of inputs, but not for another. So always read the instructions and test your output carefully. There will almost certainly be a sign of an error.

However, if you're sure there's an error or find some kind of inaccuracy, you can always point it out. At the end of each theory section, there's a link to the contents of the lesson on Github (this project is completely open-source!). You can write about an issue, look through the tests (you can see how your code is called there), and even send a pull request. If this still feels like a dark forest for you, then join our community, we'll always be there to help in the _#hexlet-feedback_ channel.
