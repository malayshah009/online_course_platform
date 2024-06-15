<?php


include("../auth_course.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <script defer src="script.js"></script>
  </head>
  <body>
    
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <div class="wrapper click_collapse">
      <div class="top_navbar">
        <div class="logo">Javascript<span></span></div>
        
          <button class="go-to-course"><a href="../select_course.php">Select Courses</a></button>
        
      </div>

      <div class="sidebar">
        <div class="sidebar_inner">
          <ul>
            <li class="topic-sub">
              <a href="#">
                <span class="white-ft">&rAarr;</span>
                <span class="text">Javascript Introduction</span>
              </a>
            </li>
            <li class="topic-sub">
              <a href="#">
                <span class="white-ft">&rAarr;</span>
                <span class="text">Script Tag</span>
              </a>
            </li>
            <li class="topic-sub">
              <a href="#">
                <span class="white-ft">&rAarr;</span>
                <span class="text">JS Statements </span>
              </a>
            </li>
            <li class="topic-sub">
              <a href="#">
                <span class="white-ft">&rAarr;</span>
                <span class="text">JS Syntax</span>
              </a>
            </li>
            <li class="topic-sub">
              <a href="#">
                <span class="white-ft">&rAarr;</span>
                <span class="text">JS Comments</span>
              </a>
            </li>

            <li class="topic-sub">
              <a href="#">
                <span class="white-ft">&rAarr;</span>
                <span class="text">JS Variables</span>
              </a>
            </li>
            <li class="topic-sub">
              <a href="#">
                <span class="white-ft">&rAarr;</span>
                <span class="text">JS Data Types </span>
              </a>
            </li>
            <li class="topic-sub">
              <a href="#">
                <span class="white-ft">&rAarr;</span>
                <span class="text">JS Functions</span>
              </a>
            </li>
            <li class="topic-sub">
              <a href="#">
                <span class="white-ft">&rAarr;</span>
                <span class="text">JS Objects</span>
              </a>
            </li>
            <li class="topic-sub">
              <a href="#">
                <span class="white-ft">&rAarr;</span>
                <span class="text">JS Strings</span>
              </a>
            </li>

            <li class="topic-sub">
              <a href="#">
                <span class="white-ft">&rAarr;</span>
                <span class="text">JS Array</span>
              </a>
            </li>

            <li class="topic-sub">
              <a href="#">
                <span class="white-ft">&rAarr;</span>
                <span class="text">JS Conditional Statements</span>
              </a>
            </li>
            <li class="topic-sub">
              <a href="#">
                <span class="white-ft">&rAarr;</span>
                <span class="text">JS For Loop </span>
              </a>
            </li>
            <li class="topic-sub">
              <a href="#">
                <span class="white-ft">&rAarr;</span>
                <span class="text">JS while Loop </span>
              </a>
            </li>
            <li class="topic-sub">
              <a href="#">
                <span class="white-ft">&rAarr;</span>
                <span class="text">JS Dates </span>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="main_container">
        <div class="container">
          <div class="content">
            <h2 class="tpic">Topic 1</h2>
            <br />
            <ul>
              <li>
                JavaScript is the world's most popular programming language.
              </li>
              <li>JavaScript is the programming language of the Web.</li>
              <li>JavaScript is easy to learn.</li>
            </ul>
            <br />
            <h2 class="">Why Study JavaScript?</h2>
            <br />
            <ul>
              <li>1. HTML to define the content of web pages</li>
              <li>CSS to specify the layout of web pages</li>
              <li>JavaScript to program the behavior of web pages</li>
            </ul>
            <br />
            <br />
            <!-- <div class="syntax">
              <h2>Syntax</h2>
              <div class="code">
                <pre>
                  const car = {type:"Fiat", model:"500", color:"white"};
                  const car = {type:"Fiat", model:"500", color:"white"};
              </pre
                >
              </div>
            </div> -->
          </div>
          <div class="content">
            <h2 class="tpic">Topic 2</h2>

            <!-- <pre> -->
            <p>
              In HTML, JavaScript code is inserted between &lt; script &gt; &lt;
              /script &gt; Tags.
              <br />
              All the code written between script tags is considered as a
              JavaScript.
            </p>
            <!-- </pre> -->

            <br />

            <div class="syntax">
              <h2>Syntax</h2>
              <div class="code">
                <pre>
                  &lt; script &gt;
                               document.getElementById("demo").innerHTML = "My First JavaScript";
                    &lt; / script &gt;
                    
              </pre
                >
              </div>
            </div>
            <br />
            <h2>External JavaScript</h2>
            <p>
              External scripts are practical when the same code is used in many
              different web pages.<br />
              JavaScript files have the file extension .js. To use an external
              script, put the name of the script file in the src (source)
              attribute of a &lt; script &gt; tag:
            </p>
            <div class="syntax">
              <h2>Syntax</h2>
              <div class="code">
                <pre>
                  &lt; script  src= " script.js " &gt; &lt; / script &gt;
                    
              </pre
                >
              </div>
            </div>
          </div>
          <div class="content">
            <h2 class="tpic">Topic 3</h2>
            <ul>
              <br />
              <li>JavaScript statements are composed of:</li>
              <li>Values, Operators, Expressions, Keywords, and Comments.</li>
              <li>
                This statement tells the browser to write "Hello Dolly." inside
                an HTML element with id="demo":
              </li>
            </ul>
            <br />

            <div class="syntax">
              <h2>Syntax</h2>
              <div class="code">
                <pre>
                  let x, y, z;      // Statement 1
                  x = 5;            // Statement 2
                  y = 6;           // Statement 3
                  z = x + y;     // Statement 4
              </pre
                >
              </div>
            </div>
            <br />
          </div>
          <div class="content">
            <h2 class="tpic">Topic 4</h2>
            JavaScript syntax is the set of rules, how JavaScript programs are
            constructed:
            <br />
            <br />
            <div class="syntax">
              <h2>Syntax</h2>
              <div class="code">
                <pre>
// How to create variables:
var x;
let y;

// How to use variables:
x = 5;
y = 6;
let z = x + y;
              </pre
                >
              </div>
            </div>
            <br />
            <h2>JavaScript Values</h2>
            <p>The JavaScript syntax defines two types of values:</p>
            <ul>
              <li>Fixed values</li>
              <li>Variable values</li>
            </ul>
            <p>Fixed values are called <b>Literals</b></p>
            <p>Variable values are called <b>Variables</b></p>
            <br />
            <h2>JavaScript Variables</h2>
            <p>
              In a programming language, <strong>variables</strong> are used to
              <strong>store</strong> data values.
            </p>
            <p>
              JavaScript uses the keywords <code class="w3-codespan">var</code>,
              <code class="w3-codespan">let</code> and
              <code class="w3-codespan">const</code> to
              <strong>declare</strong> variables.
            </p>
            <p>
              An <strong>equal sign</strong> is used to
              <strong>assign values</strong> to variables.
            </p>
            <p>
              In this example, x is defined as a variable. Then, x is assigned
              (given) the value 6:
            </p>
          </div>

          <div class="content">
            <h2 class="tpic">Topic 5</h2>
            <ul>
              <li>
                JavaScript comments can be used to explain JavaScript code, and
                to make it more readable.
              </li>
              <li>
                JavaScript comments can also be used to prevent execution, when
                testing alternative code.
              </li>
            </ul>
            <br />

            <h2 class="">Single Line comments</h2>
            <br />
            <ul>
              <li>Single line comments start with //.</li>
              <li>
                Any text between // and the end of the line will be ignored by
                JavaScript (will not be executed).
              </li>
              <li>
                This example uses a single-line comment before each code line:
              </li>
            </ul>
            <br />

            <div class="syntax">
              <h2>Syntax</h2>
              <div class="code">
                <pre>
                  //This is Single Line Comment
                  //This is Single Line Comment
              </pre
                >
              </div>
            </div>
            <br />

            <h2 class="">Multi Line comments</h2>
            <br />
            <ul>
              <li>Multi-line comments start with /* and end with */.</li>
              <li>Any text between /* and */ will be ignored by JavaScript.</li>
              <li>
                This example uses a multi-line comment (a comment block) to
                explain the code:
              </li>
            </ul>
            <br />

            <div class="syntax">
              <h2>Syntax</h2>
              <div class="code">
                <pre>
                  /* This is Single Line Comment
                  This is Single Line Comment */
              </pre
                >
              </div>
            </div>
          </div>
          <div class="content">
            <h2 class="tpic">Topic 6</h2>
            <p>
              Variables are containers for storing data (storing data values).
            </p>
            <br />
            <h3>4 Ways to Declare a JavaScript Variable:</h3>
            <ul>
              <li>1) Using <code class="w3-codespan">var</code></li>
              <li>2) Using <code class="w3-codespan">let</code></li>
              <li>3) Using <code class="w3-codespan">const</code></li>
              <li>4) Using nothing</li>
            </ul>
            <br />

            <div class="syntax">
              <h2>Syntax</h2>
              <div class="code">
                <pre>
                  let x,y=0;        //Declaration using let
                  var z;                  //Declaration using var
                  const a=10;      //Declaration using const
                  x=undefined;    //Declaration using nothing
              </pre
                >
              </div>
            </div>
            <br />
            <h2>When to Use JavaScript var?</h2>
            <p>
              Always declare JavaScript variables with
              <code class="w3-codespan">var</code>,<code class="w3-codespan"
                >let</code
              >, or<code class="w3-codespan">const</code>.
            </p>
            <p>
              The <code class="w3-codespan">var</code> keyword is used in all
              JavaScript code from 1995 to 2015.
            </p>
            <p>
              The <code class="w3-codespan">let</code> and
              <code class="w3-codespan">const</code> keywords were added to
              JavaScript in 2015.
            </p>
            <p>
              If you want your code to run in older browsers, you must use
              <code class="w3-codespan">var</code>.
            </p>
            <br />
            <h2>When to Use JavaScript const?</h2>
            <p>
              If you want a general rule: always declare variables with
              <code class="w3-codespan">const</code>.
            </p>
            <p>
              If you think the value of the variable can change, use
              <code class="w3-codespan">let</code>.
            </p>
            <p>
              In this example, <code class="w3-codespan">price1</code>,
              <code class="w3-codespan">price2</code>, and
              <code class="w3-codespan">total</code>, are variables:
            </p>
          </div>
          <div class="content">
            <h2 class="tpic">Topic 7</h2>
            <h3>JavaScript has 8 Datatypes</h3>
            <p>
              1. String<br />
              2. Number<br />
              3. Bigint<br />
              4. Boolean<br />
              5. Undefined<br />
              6. Null<br />
              7. Symbol<br />
              8. Object
            </p>
            <br />
            <h3>The Object Datatype</h3>
            <p>The object data type can contain:</p>
            <p>
              1. An object<br />
              2. An array<br />
              3. A date
            </p>
            <br />

            <div class="syntax">
              <h2>Syntax</h2>
              <div class="code">
                <pre>
// Numbers:
let length = 16;
let weight = 7.5;

// Strings:
let color = "Yellow";
let lastName = "Johnson";

// Booleans
let x = true;
let y = false;

// Object:
const person = {firstName:"John", lastName:"Doe"};

// Array object:
const cars = ["Saab", "Volvo", "BMW"];

// Date object:
const date = new Date("2022-03-25");
const car = {type:"Fiat", model:"500", color:"white"};
              </pre
                >
              </div>
            </div>
          </div>
          <div class="content">
            <h2 class="tpic">Topic 8</h2>
            <ul>
              <li>
                A JavaScript function is a block of code designed to perform a
                particular task.
              </li>
              <li>
                A JavaScript function is executed when "something" invokes it
                (calls it).
              </li>
            </ul>

            <br />

            <h2>JavaScript Function Syntax</h2>
            <ul>
              <li>
                A JavaScript function is defined with the function keyword,
                followed by a name, followed by parentheses ().
              </li>
              <li>
                Function names can contain letters, digits, underscores, and
                dollar signs (same rules as variables).
              </li>
              <li>
                The parentheses may include parameter names separated by commas:
                (parameter1, parameter2, ...)
              </li>
              <li>
                The code to be executed, by the function, is placed inside curly
                brackets: {}
              </li>
            </ul>
            <br />
            <br />
            <div class="syntax">
              <h2>Syntax</h2>
              <div class="code">
                <pre>
                  function name(parameter1, parameter2, parameter3) {
                    // code to be executed
                    // code to be executed
                    // code to be executed
                  }
              </pre
                >
              </div>
            </div>
          </div>
          <div class="content">
            <h2 class="tpic">Topic 9</h2>
            <ul>
              <li>
                You have already learned that JavaScript variables are
                containers for data values.
              </li>
              <li>
                Objects are variables too. But objects can contain many values.
              </li>
              <li>
                It is a common practice to declare objects with the const
                keyword.
              </li>
              <li>
                The values are written as name:value pairs (name and value
                separated by a colon).
              </li>
            </ul>
            <br />

            <div class="syntax">
              <h2>Syntax</h2>
              <div class="code">
                <pre>
                  const car = {type: "Fiat", model: "500", color: "white"};
                  const student = {name: "Jay", id: "100", stream: "science"};
              </pre
                >
              </div>
            </div>
          </div>
          <div class="content">
            <h2 class="tpic">Topic 10</h2>
            <ul>
              <li>JavaScript strings are for storing and manipulating text.</li>
              <li>
                A JavaScript string is zero or more characters written inside
                quotes.
              </li>
              <li>You can use single or double quotes in string</li>
              <li>
                You can use quotes inside a string, as long as they don't match
                the quotes surrounding the string:
              </li>
            </ul>
            <br />
            <h2>String length</h2>
            <ul>
              <li>
                To find the length of a string, use the built-in length
                property:
              </li>
              <br />
              <li>
                let text = "ABC";
                <br />
                let length =text.length;
              </li>
            </ul>
            <br />
            <br />
            <div class="syntax">
              <h2>Syntax</h2>
              <div class="code">
                <pre>
let answer1 = "It's alright";
let answer2 = "He is called 'Johnny'";
let answer3 = 'He is called "Johnny"';
              </pre
                >
              </div>
            </div>
          </div>
          <div class="content">
            <h2 class="tpic">Topic</h2>
            <ul>
              <li>
                An array is a special variable, which can hold more than one
                value:
              </li>
              <li>
                It is a common practice to declare arrays with the const
                keyword.
              </li>
              <li>Array indexes start with 0.</li>
              <li>[0] is the first element. [1] is the second element.</li>
              <li>
                Arrays are a special type of objects. The typeof operator in
                JavaScript returns "object" for arrays.
              </li>
              <li>
                The length property of an array returns the length of an array
                (the number of array elements).
              </li>
            </ul>

            <br />
            <br />
            <div class="syntax">
              <h2>Syntax</h2>
              <div class="code">
                <pre>
                  const cars = ["Saab", "Volvo", "BMW"];
                  cars[0] = "Opel";

                  //Multiple types of values
                  const person = ["John", "Doe", 46];
              </pre
                >
              </div>
            </div>
          </div>
          <div class="content">
            <h2 class="tpic">Topic</h2>

            <h3>Conditional Statements</h3>
            <p>
              Very often when you write code, you want to perform different
              actions for different decisions.
            </p>
            <p>You can use conditional statements in your code to do this.</p>
            <p>In JavaScript we have the following conditional statements:</p>
            <ul>
              <li>
                Use <code class="w3-codespan">if</code> to specify a block of
                code to be executed, if a specified condition is true
              </li>
              <li>
                Use <code class="w3-codespan">else</code> to specify a block of
                code to be executed, if the same condition is false
              </li>
              <li>
                Use <code class="w3-codespan">else if</code> to specify a new
                condition to test, if the first condition is false
              </li>
              <li>
                Use <code class="w3-codespan">switch</code> to specify many
                alternative blocks of code to be executed
              </li>
            </ul>

            <br />
            <h2>The if Statement</h2>
            <p>
              Use the <code class="w3-codespan">if</code> statement to specify a
              block of JavaScript code to be executed if a condition is true.
            </p>

            <br />
            <div class="syntax">
              <h2>Syntax</h2>
              <div class="code">
                <pre>
                  if (condition) {
                    //  block of code to be executed if the condition is true
                  }

                  //if else statements
                  if (condition) {
                    //  block of code to be executed if the condition is true
                  } else {
                    //  block of code to be executed if the condition is false
                  }
              </pre
                >
              </div>
            </div>
          </div>
          <div class="content">
            <h2 class="tpic">Topic 2</h2>
            <ul>
              <li>Loops can execute a block of code a number of times.</li>
            </ul>
            <br />
            <h2>Different Kinds of Loops</h2>
            <p>JavaScript supports different kinds of loops:</p>
            <ul>
              <li>
                <code class="w3-codespan">for</code> - loops through a block of
                code a number of times
              </li>
              <li>
                <code class="w3-codespan">for/in</code> - loops through the
                properties of an object
              </li>
              <li>
                <code class="w3-codespan">for/of</code> - loops through the
                values of an iterable object
              </li>
              <li>
                <code class="w3-codespan">while</code> - loops through a block
                of code while a specified condition is true
              </li>
              <li>
                <code class="w3-codespan">do/while</code> - also loops through a
                block of code while a specified condition is true
              </li>
            </ul>

            <br />
            <br />
            <div class="syntax">
              <h2>Syntax</h2>
              <div class="code">
                <pre>
                  for (let i = 0; i &lt; 5; i++) {
                    text += "The number is " + i + ;
                  }
              </pre
                >
              </div>
            </div>
            <br />
            <p>
              <strong>Expression 1</strong> is executed (one time) before the
              execution of the code block.
            </p>
            <p>
              <strong>Expression 2</strong> defines the condition for executing
              the code block.
            </p>
            <p>
              <strong>Expression 3</strong> is executed (every time) after the
              code block has been executed.
            </p>
          </div>
          <div class="content">
            <h2 class="tpic">Topic 2</h2>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo,
            quos. Molestiae praesentium, labore recusandae aperiam asperiores
            expedita explicabo possimus minima doloribus consectetur voluptates
            illo, nobis assumenda perspiciatis quia eveniet illum sequi.
            Excepturi soluta atque necessitatibus! Eum asperiores quidem
            voluptas at quos consequuntur illo quibusdam, esse, ab commodi
            soluta alias, excepturi placeat incidunt vel animi inventore fuga
            voluptatem libero blanditiis aliquam. Laboriosam in itaque iste
            magni nemo fuga maxime omnis corporis dolor dolorum! A assumenda
            distinctio, necessitatibus quasi tenetur non fugit ducimus cum est.
            Hic, quisquam, facere? Quos tempore incidunt aliquam veniam, quo
            doloremque, explicabo architecto ex perferendis vero maxime, non!
            <br />
            <br />
            <div class="syntax">
              <h2>Syntax</h2>
              <div class="code">
                <pre>
                  const car = {type:"Fiat", model:"500", color:"white"};
                  const car = {type:"Fiat", model:"500", color:"white"};
              </pre
                >
              </div>
            </div>
          </div>
          <div class="content">
            <h2 class="tpic">Topic 2</h2>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo,
            quos. Molestiae praesentium, labore recusandae aperiam asperiores
            expedita explicabo possimus minima doloribus consectetur voluptates
            illo, nobis assumenda perspiciatis quia eveniet illum sequi.
            Excepturi soluta atque necessitatibus! Eum asperiores quidem
            voluptas at quos consequuntur illo quibusdam, esse, ab commodi
            soluta alias, excepturi placeat incidunt vel animi inventore fuga
            voluptatem libero blanditiis aliquam. Laboriosam in itaque iste
            magni nemo fuga maxime omnis corporis dolor dolorum! A assumenda
            distinctio, necessitatibus quasi tenetur non fugit ducimus cum est.
            Hic, quisquam, facere? Quos tempore incidunt aliquam veniam, quo
            doloremque, explicabo architecto ex perferendis vero maxime, non!
            <br />
            <br />
            <div class="syntax">
              <h2>Syntax</h2>
              <div class="code">
                <pre>
                  const car = {type:"Fiat", model:"500", color:"white"};
                  const car = {type:"Fiat", model:"500", color:"white"};
              </pre
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
