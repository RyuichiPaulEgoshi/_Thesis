<!--Left Navigation Bars-->
<div class="nav-container">
    <ul>
        <li onmousemove="ShowHomNav()"><a href="#"><i class="material-icons">home</i></a></li>
        <li onmousemove="ShowAccNav()"><a href="#"><i class="material-icons">person</i></a></li>
        <li onmousemove="ShowSchNav()"><a href="#"><i class="material-icons">school</i></a></li>
        <li onmousemove="ShowResNav()"><a href="#"><i class="material-icons">folder</i></a></li>
        <li onmousemove="ShowSetNav()"><a href="#"><i class="material-icons">settings</i></a></li>
        <li id="down-item"><a href="#"><i class="material-icons">help</i></a></li>
    </ul>
</div>
<!--Sub Navigation Bars-->
<div id="home-nav" class="home-nav">
    <h2>HOME</h2>
    <i class="material-icons" id="closeNav"  onclick="CloseNav()">backspace</i>
</div>
<div id="acc-nav" class="acc-nav">
    <h2>STUDENT</h2>
    <h1>Ryuichi Paul Egoshi</h1>
    <a href="#"><img src="pics/_ex_profile_pic.jpg"></a>
    <ul>
        <li><a href="#"><i class="material-icons">person</i>View Your Account</a></li>
        <li><a href="#"><i class="material-icons">edit</i>Edit Your Account</a></li>
        <li><a href="#"><i class="material-icons">people</i>Classmate</a></li>
        <li><a href="#"><i class="material-icons">person_add</i>Accept Parent Acc.</a></li>
        <li id="logout"><a href="#"><i class="material-icons">exit_to_app</i>Log Out</a></li>
    </ul>
    <i class="material-icons" id="closeNav"  onclick="CloseNav()">backspace</i>
</div>
<div id="sch-nav" class="sch-nav">
    <h2>CLASS</h2>
    <ul>
        <li><a href="#"><i class="material-icons">school</i>on going classes</a></li>
            <div class="takclas">
                <img src="pics/_ex_class_pic.jpg">
                <a href="#">CCS1000</a>
            </div>
            <div class="takclas">
                <img src="pics/_ex_class_pic.jpg">
                <a href="#">CCS1200</a>
            </div>
            <div class="takclas">
                <img src="pics/_ex_class_pic.jpg">
                <a href="#">CCS3100</a>
            </div>
        <li><a href="#"><i class="material-icons">check</i>completed classes</a></li>
        <li><a href="#"><i class="material-icons">format_list_bulleted</i>class catalog</a></li>
        <li><a href="#"><i class="material-icons">arrow_forward</i>enroll</a></li>
    </ul>
    <i class="material-icons" id="closeNav"  onclick="CloseNav()">backspace</i>
</div>
<div id="res-nav" class="res-nav">
    <h2>RESOURCES</h2>
    <ul>
        <li><a href="#"><i class="material-icons">check</i>create new file</a></li>
        <li><a href="#"><i class="material-icons">file_upload</i>upload file</a></li>
        <li><a href="#"><i class="material-icons">file_download</i>download file</a></li>
    </ul>
    <i class="material-icons" id="closeNav"  onclick="CloseNav()">backspace</i>
</div>
<div id="set-nav" class="set-nav">
    <h2>SETTINGS</h2>
    <i class="material-icons" id="closeNav" onclick="CloseNav()">backspace</i>
</div>