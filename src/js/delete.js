let userPhotos = document.querySelectorAll('.user-photo');
 for (let i = 0; i < userPhotos.length; i++) {
   let deleteButton = userPhotos[i].querySelector('.user-photo__delete');
   deleteButton.addEventListener("click", function(e) {
     e.preventDefault();
     userPhotos[i].classList.add("d-none");
     const request = new XMLHttpRequest();
     const url = `delete.php`;
     const params = `post_id=${this.getAttribute('data-post_id')}`;
     request.open("POST", url, true);
     request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     request.send(params);
     userPhotos[i].remove()
   });
 }
