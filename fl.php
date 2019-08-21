<?php include "includes/header.php";?>
<!-- Our beautifull picture that have taken different apartment -->
 <img src="images/z.jpg" alt="a beautifull a apartment picture">
 <img src="images/image.jpg" alt="a beautifull a apartment picture">
 <img src="images/2.jpg" alt="a beautifull a apartment picture">
 <img src="images/1jpg.jpg" alt="a beautifull a apartment picture">
    
 <img src="images/desktop.jpg" class="desktop" alt="" />
 <img src="images/phone.jpg" class="phone" alt="" />


 <p>Omar Garmela: Big-Research#3: Flexbox
The “Flexible Box” or “Flexbox” layout mode offers an alternative to Floatsfor defining the overall appearance of a web page. Whereas floats only let us horizontally position our boxes, flexbox gives us complete control over the alignment, direction, order, and the size of our boxes.The web is currently undergoing a major transition, so a little discussion around the state of the industry is warranted. For the last decade or so, floats were the sole option for laying out a complex web page. As a result, they’re well supported even in legacy browsers, and developers have used them to build millions of web pages. This means you’ll inevitably run into floats during your web development career (so the previous chapter wasn’t a total waste).
Why Use Flexbox?
By default, HTML block-level elements stack, so if you want to align them in a row, you need to rely on CSS properties like float, or manipulate the display property with table-ish or inline-block settings.
If you choose to use float (left or right), you must clear the wrapper at some point to push it until the very last floated element, otherwise, they will overflow over anything coming after. However, with float, you are limited to organizing elements horizontally.
With a simple rule applied to a parent element, you can easily control the layout behavior of all of its children.
Reverse the order of the elements inside a Flexbox parent.
Wrap child elements in columns (number of columns can vary depending on child and parent height).
Specify the rate at which elements grow or shrink while the viewport size changes.
Control whether elements are shrinkable or not, regardless of the specified width unit type (relative or absolute).
Change the order of elements with CSS (combine this with media queries and you will find limitless possibilities in your flow).
Generate complex distributions of the elements to be equidistant with space around or just space between.
Generate “renegade” elements that flow differently (everyone to the left but one to the right, top/bottom… it’s your call).
     And, most importantly, avoid the clear-fix hack for good!</p>
 

</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Right Column</h3>
 <img src="images/tablet.jpg" class="tablet" alt="" />

</aside>
<!-- END RIGHT COL -->
 
<?php include "includes/header.php";?>
