<?php


include("../auth_course.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HTML & CSS COURSE</title>
    <link rel="stylesheet" href="style.css" />
    <script defer src="script.js"></script>
  </head>
  <body>

    <div class="wrapper click_collapse">
      <div class="top_navbar">
        <div class="logo"><span>HTML & CSS</span></div>
        <button class="go-to-course"><a href="../select_course.php">Select Courses</a></button>
      </div>

      <div class="sidebar">
        <div class="sidebar_inner">
          <ul>
            <li class="topic-sub">
              <a href="#">
                <span class="white-ft">&rAarr;</span>
                <span class="text">What is HTML?</span>
              </a>
            </li>
            <li class="topic-sub">
              <a href="#">
                <span class="white-ft">&rAarr;</span>
                <span class="text">HTML Page Structure</span>
              </a>
            </li>
			<li class="topic-sub">
              <a href="#">
                <span class="white-ft">&rAarr;</span>
                <span class="text">HTML Basic</span>
              </a>
            </li>
            <li class="topic-sub">
              <a href="#">
                <span class="white-ft">&rAarr;</span>
                <span class="text">HTML Elements </span>
              </a>
            </li>
            <li class="topic-sub">
              <a href="#">
                <span class="white-ft">&rAarr;</span>
                <span class="text">HTML Attributes</span>
              </a>
            </li>
            <li class="topic-sub">
              <a href="#">
                <span class="white-ft">&rAarr;</span>
                <span class="text">HTML Headings </span>
              </a>
            </li>
            <li class="topic-sub">
              <a href="#">
                <span class="white-ft">&rAarr;</span>
                <span class="text">HTML Paragraphs</span>
              </a>
            </li>
            <li class="topic-sub">
              <a href="#">
                <span class="white-ft">&rAarr;</span>
                <span class="text">HTML Comments</span>
              </a>
            </li>
            <li class="topic-sub">
              <a href="#">
                <span class="white-ft">&rAarr;</span>
                <span class="text">HTML Images</span>
              </a>
            </li>
            
          </ul>
        </div>
      </div>

      <div class="main_container">
        <div class="container">
          <div class="content">
            <h2>What is HTML? </h2><br>
				
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• HTML stands for Hyper Text Markup Language.<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• HTML is the standard markup language for creating Web pages<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• HTML describes the structure of a Web page.<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• HTML consists of a series of elements.<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• HTML elements tell the browser how to display the content.<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• HTML elements label pieces of content such as "this is a heading", "this is a paragraph", "this is a link", etc.<br>
            <br />
            <br />
          </div>
          <div class="content">
            <h2>HTML Page Structure. </h2><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• The !DOCTYPE html tag declaration defines that this document is an HTML5 document.<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• The  &lt; html &gt; element is the root element of an HTML page.<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• The &lt; head &gt; element contains meta information about the HTML page.<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• The &lt; title &gt; element specifies a title for the HTML page (which is shown in the browser's title bar or in the page's tab).<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• The &lt; body &gt; element defines the document's body, and is a container for all the visible contents, such as headings, paragraphs, images, hyperlinks, tables, lists, etc.<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• The &lt; h1 > element defines a large heading<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• The &lt;p > element defines a paragraph<br>
			   <br />
            <br />
          
			<div class="syntax">
              <h2>Syntax</h2>
              <div class="code">
                <pre>
					&lt; html >
					&lt; head >
					&lt; title >Page title &lt; /title >
					&lt; /head >
					&lt; body >
					&lt; h1 >This is a heading &lt; /h1 >
					&lt; p >This is a paragrap. &lt; /p >
					&lt; p >This is another paragraph.&lt; /p >
					&lt; /body >
					&lt; /html >
              </pre>
              </div>
            </div><br>
         </div>
		  <div class="content">
            <h2>HTML Documents</h2><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• All HTML documents must start with a document type declaration: &lt; DOCTYPE html >.<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• The HTML document itself begins with &lt; html and ends with &lt; html >.<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• The visible part of the HTML document is between &lt; body> and &lt; body >.. <br>
            <br />
            <br />
			<div class="syntax">
              <h2>Syntax</h2>
              <div class="code">
                <pre>
					&lt; html >
					&lt; head >
					&lt; title >Page title &lt; /title >
					&lt; /head >
					&lt; body >
					&lt; h1 >This is a heading &lt; /h1 >
					&lt; p >This is a paragrap. &lt; /p >
					&lt; p >This is another paragraph.&lt; /p >
					&lt; /body >
					&lt; /html >
              </pre>
             </div>
            </div><br>
			<h2>The &lt; DOCTYPE > Declaration</h2><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• The &lt; DOCTYPE > declaration represents the document type, and helps browsers to display web pages correctly.<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• It must only appear once, at the top of the page (before any HTML tags).<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• The &lt; DOCTYPE > declaration is not case sensitive.<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• The &lt; DOCTYPE > declaration for HTML5 is:<br>
            <br />
            <br />
			<div class="syntax">
              <h2>Syntax</h2>
              <div class="code">
                <pre>
					&lt; !DOCTYPE html >
              </pre>
              </div>
			</div>
		</div>	
          <div class="content">
            <h2>HTML Elements </h2><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• The HTML element is everything from the start tag to the end tag: <br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <h2> &lt; tagname > Content goes here...&lt; tagname > </h2><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• Examples of some HTML elements: <br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h4>• &lt; h1 >My First Heading &lt; /h1> </h4><br> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h4>• &lt; p >My first paragraph.&lt; p > </h4><br>
            <br />
            <br />
			<h2>Nested HTML Elements </h2><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• HTML elements can be nested (this means that elements can contain other elements). <br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• All HTML documents consist of nested HTML elements. <br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• The following example contains four HTML elements (&lt;html>, &lt;body>, &lt;h1> and &lt;p>):
            <br />
            <br />
			 <div class="syntax">
              <h2>Syntax</h2>
              <div class="code">
                <pre>
					&lt; html >
					&lt; head >
					&lt; title >Page title &lt; /title >
					&lt; /head >
					&lt; body >
					&lt; h1 >This is a heading &lt; /h1 >
					&lt; p >This is a paragrap. &lt; /p >
					&lt; p >This is another paragraph.&lt; /p >
					&lt; /body >
					&lt; /html >
              </pre>
             </div>
            </div>
			<br>
			<h2>Example Explained </h2><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• The &lt;html> element is the root element and it defines the whole HTML document. <br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• It has a start tag &lt;html> and an end tag &lt;/html>.<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• Then, inside the &lt;html> element there is a &lt;body> element:<br>
				<br />
				<br />
				<div class="syntax">
				<h2>Syntax</h2>
				<div class="code">
                <pre>					
					&lt; body >
					&lt; h1 >This is a heading &lt; /h1 >
					&lt; p >This is a paragrap. &lt; /p >
					&lt; p >This is another paragraph.&lt; /p >
					&lt; /body >
				</pre>
				</div>
				<br />
				<br />
				</div>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• The &lt;body> element defines the document's body. <br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• It has a start tag &lt;body> and an end tag &lt;body>.<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• Then, inside the &lt;body> element there are two other elements: &lt;h1> and &lt;p>:<br>
				<br />
				<br />
				<div class="syntax">
				<h2>Syntax</h2>
				<div class="code">
                <pre>	
					&lt; h1 >This is a heading &lt; /h1 >
					&lt; p >This is a paragrap. &lt; /p >
					&lt; p >This is another paragraph.&lt; /p >
				</pre>
				</div>
				<br />
				<br />
				</div>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• The &lt;h1> element defines a heading. <br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• It has a start tag &lt;h1> and an end tag </h1>:
				<br />
				<br />
				<div class="syntax">
				<h2>Syntax</h2>
				<div class="code">
                <pre>	
					&lt; h1 >This is a heading &lt; /h1 >
				</pre>
				</div>
				<br />
				<br />
				</div>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• The &lt;p> element defines a paragraph. <br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• It has a start tag &lt;p> and an end tag &lt;/p>:
				<br />
				<br />
				<div class="syntax">
				<h2>Syntax</h2>
				<div class="code">
                <pre>	
					&lt; p >This is a paragrap. &lt; /p >
					&lt; p >This is another paragraph.&lt; /p >
				</pre>
				</div>
				<br />
				<br />
				</div>
		  </div>
          <div class="content">
            <h2>HTML Attributes</h2><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• All HTML elements can have attributes.<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• Attributes provide additional information about elements.<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• Attributes are always specified in the start tag.<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• Attributes usually come in name/value pairs like: name="value"<br><br>
				
			<h2>The href Attribute</h2><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• The &lt;a> tag defines a hyperlink. The href attribute specifies the URL of the page the link goes to:.<br><br>
			<div class="syntax">
              <h2>Syntax</h2>
              <div class="code">
                <pre>
					•  &lt;a href="html.test">Visit HTML & CSS COURSE &lt;/a> <br>
              </pre>
              </div>
            </div><br>
		    <h2>The src Attribute </h2><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• The &lt;img> tag is used to embed an image in an HTML page. The src attribute specifies the path to the image to be displayed:<br><br>
			<div class="syntax">
              <h2>Syntax</h2>
              <div class="code">
                <pre>
					•  &lt; img src="/images/img_girl.jpg">
              </pre>
              </div>
            </div><br>
			<h2>There are two ways to specify the URL in the src attribute: </h2><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. Absolute URL - Links to an external image that is hosted on another website. Example: src="https://www.google.com/images/img_girl.jpg".<br>

				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Notes: External images might be under copyright. If you do not get permission to use it, you may be in violation of copyright laws. In addition, you cannot control external images; it can &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; suddenly be removed or changed.<br><br>

				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. Relative URL - Links to an image that is hosted within the website. Here, the URL does not include the domain name. If the URL begins without a slash, it will be relative to the current &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; page. Example: src="img_girl.jpg". If the URL begins with a slash, it will be relative to the domain. Example: src="/images/img_girl.jpg".<br><br>

				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tip: It is almost always best to use relative URLs. They will not break if you change domain.<br><br>
				
			<h2>The width and height Attributes </h2><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • The &lt;img> tag should also contain the width and height attributes, which specify the width and height of the image (in pixels):.<br><br>
				<div class="syntax">
				<h2>Syntax</h2>
				<div class="code">
					<pre>
						•  &lt; img src="img_girl.jpg" width="500" height="600">
					</pre>
				  </div>
				</div><br><br>
				
			<h2>The alt Attribute </h2><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • The required alt attribute for the &lt;img> tag specifies an alternate text for an image, if the image for some reason cannot be displayed. This can be due to a slow connection, or an error in the src attribute, or if the user uses a screen reader.<br><br>
				<div class="syntax">
				<h2>Syntax</h2>
				<div class="code">
					<pre>
						•  &lt; img src="img_girl.jpg" alt="Girl with a jacket" >
					</pre>
				  </div>
				</div><br>
				
			<h2>The style Attribute </h2><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • The style attribute is used to add styles to an element, such as color, font, size, and more.<br><br>
				<div class="syntax">
				<h2>Syntax</h2>
				<div class="code">
					<pre>
						•  &lt; p style="color:red;">This is a red paragraph. &lt;/p>
					</pre>
				  </div>
				</div><br>
				
			<h2>The lang Attribute</h2><br>	
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • You should always include the lang attribute inside the &lt;html> tag, to declare the language of the Web page. This is meant to assist search engines and browsers.<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • The following example specifies English as the language: <br><br>
				
				<div class="syntax">
				<h2>Syntax</h2>
				<div class="code">
					<pre>
						&lt;!DOCTYPE html>
						&lt;html lang="en">
						&lt;body>
						...
						&lt;/body>
						&lt;/html>
					</pre>
				  </div>
				</div><br><br>
				
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Country codes can also be added to the language code in the lang attribute. So, the first two characters define the language of the HTML page, and the last two characters define the country.<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • The following example specifies English as the language and United States as the country: <br><br>
				
				<div class="syntax">
				<h2>Syntax</h2>
				<div class="code">
					<pre>
						&lt;!DOCTYPE html>
						&lt;html lang="en-US">
						&lt;body>
						...
						&lt;/body>
						&lt;/html>
					</pre>
				  </div>
				</div><br><br>
				
			<h2>The title Attribute </h2><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • The title attribute defines some extra information about an element.<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • The value of the title attribute will be displayed as a tooltip when you mouse over the element:<br><br>
				
				<div class="syntax">
				<h2>Syntax</h2>
				<div class="code">
					<pre>
						•  &lt; p title="I'm a tooltip">This is a paragraph. &lt;/p>
					</pre>
				  </div>
				</div><br>
            <br />
            <br />
          </div>
          <div class="content">
            <h2>HTML Headings</h2><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• HTML headings are titles or subtitles that you want to display on a webpage. <br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• HTML headings are defined with the &lt;h1> to &lt;h6> tags.<br> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• &lt;h1> defines the most important heading. &lt;h6> defines the least important heading.<br> <br>
            <div class="syntax">
              <h2>Syntax</h2>
              <div class="code">
                <pre>
					&lt;h1>Heading 1&lt;/h1>
					&lt;h2>Heading 2&lt;/h2>
					&lt;h3>Heading 3&lt;/h3>
					&lt;h4>Heading 4&lt;/h4>
					&lt;h5>Heading 5&lt;/h5>
					&lt;h6>Heading 6&lt;/h6>
              </pre>
              </div>
            </div>
          </div>
          <div class="content">
            <h2>HTML Paragraphs</h2><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• The HTML &lt;p> element defines a paragraph. <br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• A paragraph always starts on a new line, and browsers automatically add some white space (a margin) before and after a paragraph. <br><br>
			
				<div class="syntax">
				  <h2>Syntax</h2>
				  <div class="code">
					<pre>
						•  	&lt;p>This is a paragraph.&lt;/p>
						•	&lt;p>This is another paragraph.&lt;/p> 
				  </pre>
				  </div>
				</div><br>
			
			<h3>HTML Display</h3> <br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• You cannot be sure how HTML will be displayed.<br> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• Large or small screens, and resized windows will create different results <br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• With HTML, you cannot change the display by adding extra spaces or extra lines in your HTML code. <br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• The browser will automatically remove any extra spaces and lines when the page is displayed:<br><br>
				
				<div class="syntax">
				  <h2>Syntax</h2>
				  <div class="code">
					<pre>
						•  	&lt;p>
							This paragraph
							contains a lot of lines
							in the source code,
							but the browser
							ignores it.
							&lt;/p>

						•	&lt;p>
							This paragraph
							contains         a lot of spaces
							in the source         code,
							but the        browser
							ignores it.
							&lt;/p>
				  </pre>
				  </div>
				</div>
			<br />
            <br />
			
			<h2>The HTML &lt;pre> Element</h2><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• The HTML &lt;pre> element defines preformatted text. <br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• The text inside a &lt;pre> element is displayed in a fixed-width font (usually Courier), and it preserves both spaces and line breaks: <br><br>
			
				<div class="syntax">
				  <h2>Syntax</h2>
				  <div class="code">
					<pre>
						•  	&lt;pre>
								  My Bonnie lies over the ocean.

								  My Bonnie lies over the sea.

								  My Bonnie lies over the ocean.

								  Oh, bring back my Bonnie to me.
							&lt;pre>
				  </pre>
				  </div>
				</div><br>
            </div>
          </div>
          <div class="content">
            <h2> HTML Comment Tag</h2><br>

				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• You can add comments to your HTML source by using the following syntax: <br>
            <br />
            <br />
            <div class="syntax">
              <div class="code">
                <pre>
					&lt; !-- Write your comments here -->
                </pre>
              </div>
            </div><br><br>
			
			<h2> Add Comments</h2><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• With comments you can place notifications and reminders in your HTML code: <br>
            <br />
            <br />
            <div class="syntax">
              <div class="code">
                <pre>
					&lt; !-- This is a comment -->

					&lt;p>This is a paragraph.&lt;/p>

					&lt;!-- Remember to add more information here -->
                </pre>
              </div>
            </div><br><br>
			
			<h2> Hide Content </h2><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• Comments can be used to hide content. <br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• This can be helpful if you hide content temporarily:
            <br />
            <br />
            <div class="syntax">
              <div class="code">
                <pre>
					&lt;p>This is a paragraph.&lt;/p>

					&lt;!-- &lt;p>This is another paragraph &lt;/p> -->

					&lt;p>This is a paragraph too.&lt;/p>
                </pre>
              </div>
            </div><br><br>
			
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• You can also hide more than one line. Everything between the &lt;!-- and the --> will be hidden from the display. <br><br>
			
			<div class="syntax">
              <div class="code">
                <pre>
					• Example

						Hide a section of HTML code:	

						&lt;p>This is a paragraph.&lt;/p>
						&lt;!--
						&lt;p>Look at this cool image:&lt;/p>
						&lt;img border="0" src="pic_trulli.jpg" alt="Trulli">
						-->
						&lt;p>This is a paragraph too.&lt;/p>
                </pre>
              </div>
            </div><br><br>
			
          </div>
          <div class="content">
            <h2>HTML Images Syntax</h2><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• The HTML <img> tag is used to embed an image in a web page. <br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• Images are not technically inserted into a web page; images are linked to web pages. The <img> tag creates a holding space for the referenced image.<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• The <img> tag is empty, it contains attributes only, and does not have a closing tag. <br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• The <img> tag has two required attributes:<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• src - Specifies the path to the image<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• alt - Specifies an alternate text for the image
            <br />
            <br />
            <div class="syntax">
              <h2>SYNTAX</h2>
              <div class="code">
                <pre>
					&lt;img src="url" alt="alternatetext">
              </pre>
              </div>
            </div>
          </div>
    
		</div>
      </div>
    </div>
  </body>
</html>
