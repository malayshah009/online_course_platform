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
        <div class="logo">CSS<span></span></div>
        
          <button class="go-to-course"><a href="../select_course.php">Select Courses</a></button>
        
      </div>

      <div class="sidebar">
        <div class="sidebar_inner">
          <ul>
            <li class="topic-sub">
              <a href="#">
                <span class="white-ft">&rAarr;</span>
                <span class="text">Purpose of CSS</span>
              </a>
            </li>
            <li class="topic-sub">
              <a href="#">
                <span class="white-ft">&rAarr;</span>
                <span class="text">Write CSS in Separate Files</span>
              </a>
            </li>
            <li class="topic-sub">
              <a href="#">
                <span class="white-ft">&rAarr;</span>
                <span class="text">Write CSS in HTML File </span>
              </a>
            </li>
            <li class="topic-sub">
              <a href="#">
                <span class="white-ft">&rAarr;</span>
                <span class="text">Inline Styles</span>
              </a>
            </li>
            <li class="topic-sub">
              <a href="#">
                <span class="white-ft">&rAarr;</span>
                <span class="text">Separating HTML code from CSS code</span>
              </a>
            </li>

            <li class="topic-sub">
              <a href="#">
                <span class="white-ft">&rAarr;</span>
                <span class="text">Class and ID Selectors</span>
              </a>
            </li>
            <li class="topic-sub">
              <a href="#">
                <span class="white-ft">&rAarr;</span>
                <span class="text">Groups of CSS Selectors </span>
              </a>
            </li>
            <li class="topic-sub">
              <a href="#">
                <span class="white-ft">&rAarr;</span>
                <span class="text">CSS Type Selectors</span>
              </a>
            </li>
            <li class="topic-sub">
              <a href="#">
                <span class="white-ft">&rAarr;</span>
                <span class="text">CSS class selectors</span>
              </a>
            </li>
            <li class="topic-sub">
              <a href="#">
                <span class="white-ft">&rAarr;</span>
                <span class="text">Selector Specificity</span>
              </a>
            </li>

            <li class="topic-sub">
              <a href="#">
                <span class="white-ft">&rAarr;</span>
                <span class="text">CSS ID selectors</span>
              </a>
            </li>

            <li class="topic-sub">
              <a href="#">
                <span class="white-ft">&rAarr;</span>
                <span class="text">CSS descendant selector</span>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="main_container">
        <div class="container">
          <div class="content">
            <h2 class="tpic">Topic 1</h2><br><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• CSS, or Cascading Style Sheets, is a language that is used in combination with HTML that customizes how HTML elements will appear. CSS can define styles and change the layout and design of a sheet.. <br>
            <br />
            <br />
          </div>
          <div class="content">
            <h2 class="tpic">Topic 2</h2><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• CSS code can be written in its own files to keep it separate from the HTML code. The extension for CSS files is .css. These can be linked to an HTML file using a &lt;link> tag in the &lt;head> section.
            <br />
            <br />
			<div class="syntax">
              <h2>SYNTAX</h2>
              <div class="code">
                <pre>
						&lt;head>
							&lt;link href="style.css" type="text/css" rel="stylesheet">
						&lt;/head>
              </pre>
              </div>
            </div>
          </div>
		  <div class="content">
            <h2 class="tpic">Topic 3</h2><br><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• CSS code can be written in an HTML file by enclosing the code in &lt;style> tags. Code surrounded by &lt;style> tags will be interpreted as CSS syntax..
            <br />
            <br />
			<div class="syntax">
              <h2>SYNTAX</h2>
              <div class="code">
                <pre>
					&lt;head>
						&lt;style>
							h1 {
								color: blue;
								}
						&lt;/style>
					&lt;/head>
              </pre>
              </div>
            </div>
          </div>
		  <div class="content">
            <h2 class="tpic">Topic 4</h2><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• CSS styles can be directly added to HTML elements by using the style attribute in the element’s opening tag. Each style declaration is ended with a semicolon. Styles added in this manner are known as inline styles.
            <br />
            <br />
			<div class="syntax">
              <h2>SYNTAX</h2>
              <div class="code">
                <pre>
					&lt;h2 style="text-align: center;">Centered text&lt;/h2>
					
					&lt;p style="color: blue; font-size:18px;">Blue, 18-point text&lt;/p>
              </pre>
              </div>
            </div>
          </div>
		  <div class="content">
            <h2 class="tpic">Topic 5</h2><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• It is common practice to separate content code in HTML files from styling code in CSS files. This can help make the code easier to maintain, by keeping the syntax for each file separate, and any changes to the content or styling can be made in their respective files
            <br />
            <br />
			<div class="syntax">
              <h2>SYNTAX</h2>
              <div class="code">
                <pre>
					&lt;h2 style="text-align: center;">Centered text&lt;/h2>
					
					&lt;p style="color: blue; font-size:18px;">Blue, 18-point text&lt;/p>
              </pre>
              </div>
            </div>
          </div>
		  <div class="content">
            <h2 class="tpic">Topic 6</h2><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• CSS classes can be reusable and applied to many elements. Class selectors are denoted with a period . followed by the class name. CSS ID selectors should be unique and used to style only a single element. ID selectors are denoted with a hash sign # followed by the id name.
            <br />
            <br />
			<div class="syntax">
              <h2>SYNTAX</h2>
              <div class="code">
                <pre>
					/* Selects all elements with class="column" */
						
						.column {
								}
								
					/* Selects element with id="first-item" */
						
						#first-item {
									}
              </pre>
              </div>
			  </div>
		  </div>	
		  <!-- <div class="content">
            <h2>Groups of CSS Selectors</h2><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• Match multiple selectors to the same CSS rule, using a comma-separated list. In this example, the text for both h1 and h2 is set to red.
            <br />
            <br />
			<div class="syntax">
              <h2>SYNTAX</h2>
              <div class="code">
                <pre>
					h1, h2  {
								color: red;
							}
				</pre>
              </div>
            </div>
          </div> -->
		  <div class="content">
            <h2 class="tpic">Topic 7</h2><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• Match multiple selectors to the same CSS rule, using a comma-separated list. In this example, the text for both h1 and h2 is set to red.
            <br />
            <br />
			<div class="syntax">
              <h2>SYNTAX</h2>
              <div class="code">
                <pre>
					h1, h2  {
								color: red;
							}
				</pre>
              </div>
            </div>
          </div>
		  <div class="content">
            <h2 class="tpic">Topic 8</h2><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• CSS type selectors are used to match all elements of a given type or tag name. Unlike for HTML syntax, we do not include the angle brackets when using type selectors for tag names. When using type selectors, elements are matched regardless of their nesting level in the HTML.
            <br />
            <br />
			<div class="syntax">
              <h2>SYNTAX</h2>
              <div class="code">
                <pre>
					/* Selects all &lt;p&gt; tags */
						p {
						}
				</pre>
              </div>
            </div>
          </div>
		  <div class="content">
            <h2 class="tpic">Topic 9</h2><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• The CSS class selector matches elements based on the contents of their class attribute. For selecting elements having calendar-cell as the value of the class attribute, a . needs to be prepended.
            <br />
            <br />
			<div class="syntax">
              <h2>SYNTAX</h2>
              <div class="code">
                <pre>
					.calendar-cell  {
									 color: #fff;
									}

				</pre>
              </div>
            </div>
          </div>
		  <div class="content">
            <h2 class="tpic">Topic 10</h2><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• Specificity is a ranking system that is used when there are multiple conflicting property values that point to the same element. When determining which rule to apply, the selector with the highest specificity wins out. The most specific selector type is the ID selector, followed by class selectors, followed by type selectors. In this example, only color: blue will be implemented as it has an ID selector whereas color: red has a type selector.
            <br />
            <br />
			<div class="syntax">
              <h2>SYNTAX</h2>
              <div class="code">
                <pre>
					   h1#header{
								 color: blue;
								} /* implemented */
						h1  {
								color: red;
							} /* Not implemented */


				</pre>
              </div>
            </div>
          </div>
		  <div class="content">
            <h2 class="tpic">Topic 11</h2><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• The CSS ID selector matches elements based on the contents of their id attribute. The values of id attribute should be unique in the entire DOM. For selecting the element having job-title as the value of the id attribute, a # needs to be prepended.
            <br />
            <br />
			<div class="syntax">
              <h2>SYNTAX</h2>
              <div class="code">
                <pre>
					   #job-title {
									font-weight: bold;
								  }


				</pre>
              </div>
            </div>
          </div>
		  <div class="content">
            <h2 class="tpic">Topic 12</h2><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• The CSS descendant selector combinator is used to match elements that are descended from another matched selector. They are denoted by a single space between each selector and the descended selector. All matching elements are selected regardless of the nesting level in the HTML.
            <br />
            <br />
			<div class="syntax">
              <h2>SYNTAX</h2>
              <div class="code">
                <pre>
					   div p { }
					   
					   section ol li { }
				</pre>
              </div>
            </div>
          </div>
		</div>
      </div>
    </div>
  </body>
</html>
