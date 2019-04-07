<!DOCTYPE html>
<html>
<head>
	<title>Social network</title>
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


        <!--AJAX-->
<script>

       $(document).ready(function() {
   $("#imgForm").submit(function(e) {
       e.preventDefault();
       $.ajax( {
           url: "imgComment.php",
           method: "post",
           data: $("#imgForm").serialize(),
           dataType: "text",
           success: function(strMessage) {
            console.log(strMessage);
            $("#postImgComment").text(strMessage);
               $("#imgForm")[0].reset();
           }
       });
       $postid = $('#postId').val();
       loadCom($postid);

   });
});

       </script>
       <script type="text/javascript">
           function loadCom(par) {
             var xhttp = new XMLHttpRequest();
             xhttp.onreadystatechange = function() {
           if (this.readyState == 4 && this.status == 200) {
             let a=this.responseText;
             var niz = JSON.parse(a);
           
           document.getElementById("newImagePost").innerHTML = '';
             for(i=0; i<niz.length; i++) {
             console.log(niz);
             document.getElementById("newImagePost").innerHTML += niz[i].firstName+' '+niz[i].lastName+'<br>' + niz[i].comBody+"<br><br>";
         }
   }
 }
 xhttp.open("POST", "showImgComment.php", true);
 xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
 xhttp.send("showImgComment=abc&postId="+par);
}
       </script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/modalBox.css">
</head>
<body class="dashboard">
	<header id="header1">
			<img src="images/cookbook_logo_white.png" alt="cookBook logo image">
			<div class="userset">
				<a href='profile.php?username={$username}'>
				<!--EDIT PROFILE-->
				{if !empty ($userimg)}
				<img class="userImageSmall" src="userimg/{$userimg}"></a>
				{else}
				<img src="images/user1.jpg"></a>
				{/if}
				<!--EDIT PROFILE-->
				<a href='profile.php?username={$username}' class="imekorisnika">{$fullName}</a>
				<a href="logout.php"><input type="submit" name="logout" value="logout"></a>
			</div>

	</header>
	<main id="main2">
		<div class="userpost">
			<form id="postForm" action="dashboard.php" method="post" enctype="multipart/form-data">
				<textarea name="inputPost" rows="4" cols="40"></textarea><br>
				<select name="privateStatus">
					<option value="public">Public</option>
					<option value="private">Private</option>
				</select>
				<input type="file" name="file" id="image" value="dodaj sliku">
				<input type="submit" name="insertPost" value="Postavi">
			</form>
		</div>
		{$postSuccessMessage}
		{section name=i loop=$postsRows}
		<div class='userposted'>	
			<!-- Iscitavanje postova -->
			<!--EDIT PROFILE-->
			{if !empty($postsRows[i].image)}
			<img  class="userImg" src='userimg/{$postsRows[i].image}'>
			{else}
			<img  class="userImg" src='userimg/user1.jpg'>
			{/if}

			<a href='profile.php?username={$postsRows[i].username}'>{$postsRows[i].firstName} {$postsRows[i].lastName}</a>
			<input type="hidden" id="imgId" name="postId" value="{$postsRows[i].id}">
			<p class="content">{$postsRows[i].body}</p>
			{if !empty($postsRows[i].images)}
			<img class="postImage" id="{$postsRows[i].id}" src="uploaded/{$postsRows[i].images}" alt="post slika" />
			{/if}
			<p>{$postsRows[i].date}</p>
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
      	</p>
      </div>
	  <div class="imageComments" onclick="">
	  	<form id="imgForm" action="" method="POST">
		  <textarea name="commentImg" id="commentImg" cols="10" rows="4" placeholder="napisi neki komentar ovde.." ></textarea>
		  <input type="hidden" id="postId" name="postId" value="{$postsRows[i].id}">
		  <input id="submitImgCom" type="submit" name="submitComm" value="objavi">
		</form>
	  </div>
    </div>
  </div>
</div>
{/section}
<!-- BACK TO TOP BUTTON -->
<div id="backToTopBtn">
  <i id="backToTop" class="fas fa-chevron-circle-up" onclick="scrollToTop()" title="back to top"></i>
</div>
<!--java script code for preventing resubmission when refreshing the page-->
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
    <div id="alertimg">{$imgmsg}</div>
<!-- Alert za gresku pri postavljanju slike-->
{if !empty($imgmsg)}
	<script type="text/javascript">
		function imgmsg(){
			let alertimg = document.getElementById('alertimg').textContent;
			alert (alertimg);
		}
		imgmsg();
	</script>
{/if}

{literal}
<script type="text/javascript">
	// MODAL BOX - codeblock
	slike = document.querySelectorAll(".postImage");

	function makeImage(image_src) {
		return `<img src="${image_src}">`;
	}
	for(i=0; i<slike.length; i++) {
		slike[i].addEventListener('click', function(event){
$("#postId").val(event.target.id);
            loadCom(event.target.id);
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

</script>
<script type="text/javascript">
	// show back to top button on scroll 
window.onscroll = function() {scrollFunction()};
   
  function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) { document.getElementById("backToTopBtn").style.display = "block";
  } else {
    document.getElementById("backToTopBtn").style.display = "none";
  }
};

// back to top function
const scrollToTop = () => {
   const c = document.documentElement.scrollTop || document.body.scrollTop;
  if (c > 0) {
    window.requestAnimationFrame(scrollToTop);
    window.scrollTo(0, c - c / 12);
  }
};

</script>
<!-- anime.js cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.js"></script>
<script>
// anime.js script
	anime({
		targets: 'img.userImageSmall',
		rotate: [
			{value: 0},
			{value: 180, delay: 2000},
			{value: 0}
		],
		loop: true
	});
</script>
{/literal}
</body>
</html>