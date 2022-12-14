<!--

TODO:
  -Make stars more grey to not conflict for attention
  -Make a limit to the amount of times the title size changes bc it is fluxuating too much
  -Font sizes make
  -Fix Social Media img clearness by outlining the images
  -Separate css to ALL, page1, page2, page3 css files
  -Make works exact squares

-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Matt Mammano - Web Dev/Designer</title>
    <meta name="maker" content="Matthew Mammano">
    <link rel="apple-touch-icon" sizes="180x180" href="Favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="Favicon/favicon-16x16.png">
    <link rel="manifest" href="Favicon/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="ss.css" type="text/css">
    <link rel="stylesheet" href="ssAni.css" type="text/css">
    <link rel="stylesheet" href="ssMQ.css" type="text/css">
    <script src="include.js" type="text/javascript"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@0,300;0,700;1,300&amp;family=Pragati+Narrow:wght@400;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Madurai:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Puritan:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>
  <body>
    <div class="page1">
      <div class="fullBackground"><?php include("Pics/Stars.svg"); ?></div>
      <img class="logoImg" src="Pics/Logo.svg" alt="MM">
      <div class="earthContainer"><?php include("Pics/Earth.svg"); ?></div>
      <div id="MContainerOuter" class="MContainerOuter">
        <div id="M" class="MContainer"><img src="Pics/M.svg"></div>
      </div>
      <div class="titleContainer" id="titleContainer">
        <div id="title1" class="title1">Matt Mammano</div>
        <div class="title2Container">
          <div id="title2" class="title2">Website Developer and Designer</div>
        </div>
        <!-- <div id="loadingPercent" class="loadingPercent">0%</div> -->
      </div>
      <div class="socialLinks">
        <img src="Pics/Icon1.svg" alt="Phone" style="cursor: pointer;" onclick="window.open('tel:908-910-5439','_blank')">
        <img src="Pics/Icon2.svg" alt="Email" style="cursor: pointer;" onclick="window.open('mailto: mattmammanoweb@gmail.com','_blank')">
        <img src="Pics/Icon3.svg" alt="Instagram" style="cursor: pointer;" onclick="window.open('https://www.instagram.com/webdevmattm/','_blank')">
        <img src="Pics/Icon4.svg" alt="Facebook" style="cursor: pointer;" onclick="window.open('https://www.facebook.com/matthew.mammano/','_blank')">
      </div>
    </div>
    <div class="page2">
      <div class="workTitle">My Work</div>
      <div class="workContainer">
        <div class="textyWithIMG">
          <div class="texty">
            <div class="textyInside">
              <div class="texty1">
                <a href="https://redbankortho.com" target="_blank">Red Bank Ortho</a>
              </div>
              <div class="texty2">
                A freelance project for Dr. Suzanne Quigley, owner of Red Bank Orthodontics, who was seeking a simplistic and friendly website to match her businesses needs. This site includes a plethora of visual media to convey information regarding treatment and the story behind the establishment. It also includes the ability to make online appointments and fill out informational forms before arriving. Dynamic styling was utilized to fit both mobile and desktop devices with an addition of new development techniques such as menu bars and slideshows.
              </div>
              <div class="buttonContainer">
                <button onclick="window.open('https://redbankortho.com','_blank')" >Visit Website</button>
              </div>
            </div>
          </div>
          <img src="Pics/Works/1.svg">
        </div>
        <div class="textyWithIMG">
          <div class="texty">
            <div class="textyInside">
              <div class="texty1">
                <a href="https://mattmammano.com/!Portfolio/Pages/6Feet" target="_blank">6 Feet</a>
              </div>
              <div class="texty2">
                A project that was created for and competed in the Congressional App Challenge and Steamtank. This website is a prototype for the concept of an application to assist users with COVID-19 contact tracing through location tracking technology. It was also going to have a reminder system to help its users remember their masks, to wash their hands, etc. A positive and up-to-date design was utilized for this site in order to attract potential downloads.
              </div>
              <div class="buttonContainer">
                <button onclick="window.open('https://mattmammano.com/!Portfolio/Pages/6Feet','_blank')" >Visit Website</button>
              </div>
            </div>
          </div>
          <img src="Pics/Works/2.svg">
        </div>
        <div class="textyWithIMG">
          <div class="texty">
            <div class="textyInside">
              <div class="texty1">
                <a href="https://mattmammano.com/!Portfolio/Pages/Structure" target="_blank">Structure</a>
              </div>
              <div class="texty2">
                An example website to demonstrate to potential clients what my services include and the extents to my expertise. Colorful and friendly icons were used to capture the audiences attention. This modern layout is used by many well-known tech industries and therefore is a valuable style when mastered.
              </div>
              <div class="buttonContainer">
                <button onclick="window.open('https://mattmammano.com/!Portfolio/Pages/Structure','_blank')" >Visit Website</button>
              </div>
            </div>
          </div>
          <img src="Pics/Works/3.svg">
        </div>
        <div class="textyWithIMG">
          <div class="texty">
            <div class="textyInside">
              <div class="texty1">
                <a href="https://mattmammano.com/!Portfolio/Pages/VIP/home.php" target="_blank">VIP</a>
              </div>
              <div class="texty2">
                The Virtual Interactive Planner (VIP) application was the winner of the 2020 Congressional App Challenge for its overall idea, design, and thorough backend development.
              </div>
              <div class="buttonContainer">
                <button onclick="window.open('https://mattmammano.com/!Portfolio/Pages/VIP/home.php','_blank')" >Visit Website</button>
              </div>
            </div>
          </div>
          <img src="Pics/Works/4.svg">
        </div>
        <div class="textyWithIMG">
          <div class="texty">
            <div class="textyInside">
              <div class="texty1">
                <a href="https://pointborohs.org/!Matt/OpenTheDoor/home.php" target="_blank">Open The Door</a>
              </div>
              <div class="texty2">
                Open the Door was created to aid the special needs class at Point Pleasant Borough High School with maintaining an orderly list of who left the classroom. It is a simple signin/signout application allowing users to easily tap whether they are leaving or returning from their location - which teachers can then print out.
              </div>
              <div class="buttonContainer">
                <button onclick="window.open('https://pointborohs.org/!Matt/OpenTheDoor/home.php','_blank')" >Visit Website</button>
              </div>
            </div>
          </div>
          <img src="Pics/Works/5.svg">
        </div>
        <div class="textyWithIMG">
          <div class="texty">
            <div class="textyInside">
              <div class="texty1">
                <a href="https://pointborohs.org/SS" target="_blank">School Scheduler</a>
              </div>
              <div class="texty2">
                This application tracks the time of day and then utilizes this information to show what class period it currently is. It additionally informs users of whether it is an A or B Day currently, which is useful for finding the class they should be in.
              </div>
              <div class="buttonContainer">
                <button onclick="window.open('https://pointborohs.org/SS','_blank')" >Visit Website</button>
              </div>
            </div>
          </div>
          <img src="Pics/Works/6.svg">
        </div>
      </div>
    </div>
    <div class="page3">
      <div class="page3Container">
        <div class="t-1"><div id="t-1">Hello!</div></div>
        <div class="t-2"><div id="t-2">Want to get in contact with me?</div></div>
        <div class="t-3">
          <div id="t-3">
            <div style="justify-self: end; padding-right: 5%;"><div><button style="cursor: pointer;" onclick="window.open('tel:908-910-5439','_blank')" class="contactyButton">Call/Text</button></div></div>
            <div style="justify-self: start; padding-left: 5%;"><div><button style="cursor: pointer;" onclick="window.open('mailto: mattmammanoweb@gmail.com','_blank')" class="contactyButton">Email</button></div></div>
          </div>
        </div>
        <div class="t-4"><div id="t-4">Or use one of my social media accounts below</div></div>
      </div>
    </div>
  </body>
</html>

<script type="text/javascript">
  !function(e,t){if("function"==typeof define&&define.amd)define(["module","exports"],t);else if("undefined"!=typeof exports)t(module,exports);else{var n={exports:{}};t(n,n.exports),e.fitty=n.exports}}(this,function(e,t){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var g=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var i in n)Object.prototype.hasOwnProperty.call(n,i)&&(e[i]=n[i])}return e};t.default=function(n){if(n){var r={IDLE:0,DIRTY_CONTENT:1,DIRTY_LAYOUT:2,DIRTY:3},i=[],e=null,o="requestAnimationFrame"in n?function(){n.cancelAnimationFrame(e),e=n.requestAnimationFrame(function(){return l(i.filter(function(e){return e.dirty&&e.active}))})}:function(){},t=function(t){return function(){i.forEach(function(e){return e.dirty=t}),o()}},l=function(e){e.filter(function(e){return!e.styleComputed}).forEach(function(e){e.styleComputed=s(e)}),e.filter(f).forEach(d);var t=e.filter(c);t.forEach(u),t.forEach(function(e){d(e),a(e)}),t.forEach(p)},a=function(e){return e.dirty=r.IDLE},u=function(e){e.availableWidth=e.element.parentNode.clientWidth,e.currentWidth=e.element.scrollWidth,e.previousFontSize=e.currentFontSize,e.currentFontSize=Math.min(Math.max(e.minSize,e.availableWidth/e.currentWidth*e.previousFontSize),e.maxSize),e.whiteSpace=e.multiLine&&e.currentFontSize===e.minSize?"normal":"nowrap"},c=function(e){return e.dirty!==r.DIRTY_LAYOUT||e.dirty===r.DIRTY_LAYOUT&&e.element.parentNode.clientWidth!==e.availableWidth},s=function(e){var t=n.getComputedStyle(e.element,null);e.currentFontSize=parseFloat(t.getPropertyValue("font-size")),e.display=t.getPropertyValue("display"),e.whiteSpace=t.getPropertyValue("white-space")},f=function(e){var t=!1;return!e.preStyleTestCompleted&&(/inline-/.test(e.display)||(t=!0,e.display="inline-block"),"nowrap"!==e.whiteSpace&&(t=!0,e.whiteSpace="nowrap"),e.preStyleTestCompleted=!0,t)},d=function(e){e.element.style.whiteSpace=e.whiteSpace,e.element.style.display=e.display,e.element.style.fontSize=e.currentFontSize+"px"},p=function(e){e.element.dispatchEvent(new CustomEvent("fit",{detail:{oldValue:e.previousFontSize,newValue:e.currentFontSize,scaleFactor:e.currentFontSize/e.previousFontSize}}))},y=function(e,t){return function(){e.dirty=t,e.active&&o()}},m=function(e){e.originalStyle={whiteSpace:e.element.style.whiteSpace,display:e.element.style.display,fontSize:e.element.style.fontSize},w(e),e.newbie=!0,e.dirty=!0,i.push(e)},v=function(t){return function(){i=i.filter(function(e){return e.element!==t.element}),t.observeMutations&&t.observer.disconnect(),t.element.style.whiteSpace=t.originalStyle.whiteSpace,t.element.style.display=t.originalStyle.display,t.element.style.fontSize=t.originalStyle.fontSize}},S=function(e){return function(){e.active||(e.active=!0,o())}},h=function(e){return function(){return e.active=!1}},w=function(e){e.observeMutations&&(e.observer=new MutationObserver(y(e,r.DIRTY_CONTENT)),e.observer.observe(e.element,e.observeMutations))},b={minSize:16,maxSize:512,multiLine:!0,observeMutations:"MutationObserver"in n&&{subtree:!0,childList:!0,characterData:!0}},z=null,T=function(){n.clearTimeout(z),z=n.setTimeout(t(r.DIRTY_LAYOUT),E.observeWindowDelay)},F=["resize","orientationchange"];return Object.defineProperty(E,"observeWindow",{set:function(e){var t=(e?"add":"remove")+"EventListener";F.forEach(function(e){n[t](e,T)})}}),E.observeWindow=!0,E.observeWindowDelay=100,E.fitAll=t(r.DIRTY),E}function D(e,t){var n=g({},b,t),i=e.map(function(e){var t=g({},n,{element:e,active:!0});return m(t),{element:e,fit:y(t,r.DIRTY),unfreeze:S(t),freeze:h(t),unsubscribe:v(t)}});return o(),i}function E(e){var t,n=1<arguments.length&&void 0!==arguments[1]?arguments[1]:{};return"string"==typeof e?D((t=document.querySelectorAll(e),[].slice.call(t)),n):D([e],n)[0]}}("undefined"==typeof window?null:window),e.exports=t.default});

  var x = 0;
  var fit = window.setInterval(function() {
    if (x > 5) window.clearInterval(fit);
    fitty('#title1', {minSize: 2, multiLine: false});
    fitty('#title2', {minSize: 2, multiLine: false});
    fitty('#t-1', {minSize: 2, multiLine: false});
    fitty('#t-2', {minSize: 2, multiLine: false});
    //fitty('#t-3', {minSize: 2, multiLine: false});
    fitty('#t-4', {minSize: 2, multiLine: false});
    x++;
  }, 50);

</script>
