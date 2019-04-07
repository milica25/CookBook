<?php
/* Smarty version 3.1.33, created on 2019-04-04 23:53:56
  from 'C:\xampp\htdocs\srdjan\AlmostDone\views\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca67cf496f417_11001671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28ef90a4e8acf674e6fce97297579c14d73f3252' => 
    array (
      0 => 'C:\\xampp\\htdocs\\srdjan\\AlmostDone\\views\\dashboard.tpl',
      1 => 1554414823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca67cf496f417_11001671 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<title>Social network</title>
	<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"><?php echo '</script'; ?>
>
        <!--AJAX-->
        <?php echo '<script'; ?>
>

        /*	$(document).ready(function() {
                $("#imgForm").submit(function(e) {
                    e.preventDefault();
                    $.ajax( {
                        url: "imgComment.php",
                        method: "post",
                        data: $("form").serialize(),
                        dataType: "text",
                        success: function(strMessage) {
                            $("#postImgComment").text(strMessage);
                            $("#imgForm")[0].reset();
                        }
                    });
                });
            }); */
            /*$('#submitImgCom').click(function(){
   			var imgForm = $('#imgForm').val();
   			var postId = $('#postId').val();
   			if(comment.length == 0){
   				 event.preventDefault();
   			 } else { 
			   $.post("insertComments.php",
			   {
			       commentImg: imgForm,
			       postId: postId
			   },
			   function(data, status){
			       $('#postImgComment').prepend(data);
			       $('#imgForm').val('');
			       $postImgComment.scrollTop(0);
			       $("#imgForm")[0].reset();
   });
   }
});
           
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript">
            function loadCom(par) {
  			var xhttp = new XMLHttpRequest();
  			xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
    		//document.getElementById("newImagePost").innerHTML = this.responseText;
      		let a=this.responseText;
      		var niz = JSON.parse(a);
      		for(i=0; i<niz.length; i++) {
      		console.log(niz);
      	}
    }
  }
  xhttp.open("POST", "showImgComment.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("showImgComment=abc&postId="+par);
}
        <?php echo '</script'; ?>
>
        
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/modalBox.css">
</head>
<body class="dashboard">
	<header id="header1">
			<img src="images/cookbook_logo_white.png" alt="cookBook logo image">
			<div class="userset">
				<a href='profile.php?username=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
'>
				<!--EDIT PROFILE-->
				<?php if (!empty($_smarty_tpl->tpl_vars['userimg']->value)) {?>
				<img src="userimg/<?php echo $_smarty_tpl->tpl_vars['userimg']->value;?>
"></a>
				<?php } else { ?>
				<img src="images/user1.jpg"></a>
				<?php }?>
				<!--EDIT PROFILE-->
				<a href='profile.php?username=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
' class="imekorisnika"><?php echo $_smarty_tpl->tpl_vars['fullName']->value;?>
</a>
				<a href="logout.php"><input type="submit" name="logout" value="logout"></a>
			</div>

	</header>
	<main id="main2">
		<div class="userpost">
			<form action="dashboard.php" method="post" enctype="multipart/form-data">
				<textarea name="inputPost" rows="4" cols="40"></textarea><br>
				<select name="privateStatus">
					<option value="public">Public</option>
					<option value="private">Private</option>
				</select>
				<input type="file" name="file" id="image" value="dodaj sliku">
				<input type="submit" name="insertPost" value="Postavi">
			</form>
		</div>
		<?php echo $_smarty_tpl->tpl_vars['postSuccessMessage']->value;?>

		<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['postsRows']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
		<div class='userposted'>	
			<!-- Iscitavanje postova -->
			<!--EDIT PROFILE-->
			<?php if (!empty($_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'])) {?>
			<img  class="userImg" src='userimg/<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'];?>
'>
			<?php } else { ?>
			<img  class="userImg" src='userimg/user1.jpg'>
			<?php }?>
			<!--EDIT PROFILE-->
			<a href='profile.php?username=<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username'];?>
'><?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['firstName'];?>
 <?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lastName'];?>
</a>
			<input type="text" id="imgId" name="postId" value="<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
			<p class="content"><?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['body'];?>
</p>
			<?php if (!empty($_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['images'])) {?>
			<img class="postImage" id="<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" src="uploaded/<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['images'];?>
" alt="post slika" />
			<?php }?>
			<p><?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['date'];?>
</p>
		</div>
		

			
	</main>

<!--MODAL BOX - Image & Comment Image-->
<div id="modal">
  <div id="modal-open" class="modalOpen">
    <div class="modal-header">
      <h1>Pa hajd' dodajte komentar..</h1>
      <span id="close" class="closeBtn" onclick="closeModal()">&times;</span>
    </div>
    <div class="modal-body">
      <div class="currentImage"></div>
      <div class="imagePosts">
      	<div id="postImgComment"></div>
      	<p id="newImagePost">
      		<!-- image posts will go here -->
      		nego sta nego da je dobra!
      	</p>
      </div>
	  <div class="imageComments" onclick="">
	  	<form id="imgForm" action="imgComment.php" method="POST">
		  <textarea name="commentImg" id="commentImg" cols="10" rows="4" placeholder="napisi neki komentar ovde.." ></textarea>
		  <input type="text" id="postId" name="postId" value="<?php echo $_smarty_tpl->tpl_vars['postsRows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
		  <input id="submitImgCom" type="submit" name="submitComm" value="objavi">
		</form>
	  </div>
    </div>
  </div>
</div>
<?php
}
}
?>
<!--java script code for preventing resubmission when refreshing the page-->
<?php echo '<script'; ?>
>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
<?php echo '</script'; ?>
>
    <div id="alertimg"><?php echo $_smarty_tpl->tpl_vars['imgmsg']->value;?>
</div>
<!-- Alert za gresku pri postavljanju slike-->
<?php if (!empty($_smarty_tpl->tpl_vars['imgmsg']->value)) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		function imgmsg(){
			let alertimg = document.getElementById('alertimg').textContent;
			alert (alertimg);
		}
		imgmsg();
	<?php echo '</script'; ?>
>
<?php }?>


<?php echo '<script'; ?>
 type="text/javascript">
	// MODAL BOX - codeblock
	slike = document.querySelectorAll(".postImage");

	function makeImage(image_src) {
		return `<img src="${image_src}">`;
	}
	for(i=0; i<slike.length; i++) {
		slike[i].addEventListener('click', function(event){
			console.log(event.target);
            loadCom(event.target.id);
            console.log(imgId);
			document.getElementById('modal').style.display = "block"; 
			document.getElementsByClassName('currentImage')[0].innerHTML = makeImage(event.target.src);
		});
	}

	
// CLOSE MODAL BOX //
	function closeModal(){			// closing on X clicked
		document.getElementById('modal').style.display = "none";
	};

	document.onkeydown = function(evt) {      //closing popupContainer with esc key
    evt = evt || window.event;
    if (evt.keyCode == 27) {
        document.getElementById('modal').style.display = 'none';
    }
    };
var modal = document.getElementById('modal');
    modal.addEventListener('click', function(e) { //closing modal by clicking outside of the Content
        if (e.target !== this)
          return;
          modal.style.display = 'none';
      });

<?php echo '</script'; ?>
>

</body>
</html><?php }
}
