        //for Image Preview
          
        const inpFile = document.getElementById("inpFile");
        const prevContainer = document.getElementById("prevContainer");
        const prevText =prevContainer.querySelector(".prev-image-text");
        const previmage =prevContainer.querySelector(".previewImg");

        inpFile.addEventListener("change", function(){
          const file = this.files[0];

          if(file){
            const reader = new FileReader();


            prevText.style.display = "none";
            previmage.style.display = "block";

            reader.addEventListener("load", function(){
              console.log(this);
              previmage.setAttribute('src', this.result);
            }),

            reader.readAsDataURL(file);
          }
          else{
            prevText.style.display = null;
            previmage.style.display = null;
          }
        });


        function toggleMenu(){
          let toggle = document.querySelector('.toggle');
          let sidebar = document.querySelector('.sidebar');
          let main = document.querySelector('.main');
          let header = document.querySelector('.sidebar-header');
          let icon = document.querySelector('.sidebar-header-logo');
          let menu = document.querySelector('.collapse');
          let topnav = document.querySelector('.top-nav-container');
          toggle.classList.toggle('active');
          sidebar.classList.toggle('active');
          main.classList.toggle('active');
          header.classList.toggle('active');
          icon.classList.toggle('active');
          menu.classList.toggle('active');
          topnav.classList.toggle('active');
        }

        var header = document.getElementsByClassName("sidebar");
        var btns = header.getElementsByClassName("sideMenu");
        for (var i = 0; i < btns.length; i++) {
          btns[i].addEventListener("click", function() {
          var current = document.getElementsByClassName("active");
          current[0].className = current[0].className.replace(" active", "");
          this.className += " active";
          });
        }

        var header = document.getElementById("dashboard");
        var btns = header.getElementsByClassName("subMenu");
        for (var i = 0; i < btns.length; i++) {
          btns[i].addEventListener("click", function() {
          var current = document.getElementsByClassName("active");
          current[0].className = current[0].className.replace(" active", "");
          this.className += " active";
          });
        }


        function myFunction() {
          var input, filter, table, tr, td, i, txtValue;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          table = document.getElementById("myTable");
          tr = table.getElementsByTagName("tr");
          for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
              txtValue = td.textContent || td.innerText;
              if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
              } else {
                tr[i].style.display = "none";
              }
            }       
          }
        }

        $(document).on('click', '#change_picture_btn', function(){
          $('#admin_image').click();
        });
        $('#admin_image').ijaboCropTool({
          preview : '',
          setRatio:1,
          allowedExtensions: ['jpg', 'jpeg','png'],
          buttonsText:['CROP', 'QUIT'],
          buttonsColor:['#30bf7d', '#ee5155', -15],
          processUrl:'{{ route("adminPictureUpdate") }}',
          // withCSRF:['_token', '{{ csrf_token() }}'],
          onSuccess:function(message, element, status){
            alert(message);
          },
          onError:function(message, element, status){
            alert(message);
          }
        }); 
        
        
        var loader = document.querySelector(".loader")

        window.addEventListener("load", vanish);

        function vanish() {
          loader.classList.add("disppear");
        }

        $(document).ready( function () {
          $('#example').DataTable();
        } );
        