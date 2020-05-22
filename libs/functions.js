$(function(){
  var pageNum = 1;
  $('#nextPage').on('click', function(){
    pageNum++;
    getData("backend/index.php?controller=works&route=pager&pageon="+pageNum,outputAll);
  })
  $('#prevPage').on('click', function(){
    pageNum--;
    getData("backend/index.php?controller=works&route=pager&pageon="+pageNum,outputAll);
  })
  function getData(url, fnProcess)
  {
    // this $.ajax is a jquery function, that opens a connection to a server, and makes a request... and gives back to the success function, the response from the server...
    $.ajax({
      url: url,
      method: "post",
      success: function(data) // whatever comes from the url, ends up in the parameter
      {
        fnProcess(data);
      },
      error: function(err)
      {
      }
    })
  }

  function processFeatured(data) // getting latest data inserted
  {
    var html ="";
    data.forEach(function(record){
      html += '<a href="#" data-id="'+record.id+'"class="trigger modalBtn"><img class="addbybackend" src="imgs/'+record.strCoverImage+'" alt="'+record.strName+'"  href="#modal'+record.id+'""></a>';
    });
    html += '<a href="dept.php"><i class="fas fa-play"></i></a>'
    $(".post").html(html);  

    $(".modalBtn").on("click", function(){
    var whichID = $(this).data('id');
    getData("backend/index.php?controller=works&route=findById&id="+whichID,showModal);
    })
  }
//output All the works from all the department 
  function outputAll(data) { 
    var html ="";
    data.forEach(function(record){
      html += '<a href="#" data-id="'+record.id+'"class="trigger modalBtn"><img class="addbybackend" src="imgs/'+record.strCoverImage+'" alt="'+record.strName+'"href="#modal'+record.id+'""></a>';
    });
    $(".deptImages").html(html);  

    $(".modalBtn").on("click", function(){
      var whichID = $(this).data('id');
    getData("backend/index.php?controller=works&route=findById&id="+whichID,showModal);
    })
  }

  function showModal(data)
  {
    var html ="";
    data.forEach(function(record){

      html += '<div class="bgModal" id="modal'+record.id+'"><div class="model-content"><img src="imgs/closebutton.png" alt="delete button" class="close" id="closeModal"><div class="spaceContent"><img src="imgs/'+record.strCoverImage+'" alt="'+record.strName+'"id="modalImage"><h2>'+record.strName+'</h2><p>'+record.strDetail+'</p></div></div></div>';
    });
    $(".addByBackend").html(html);  

    var modalBtn = document.querySelectorAll("a.modalBtn");

    // Get all page modals
    var modals = document.querySelectorAll('.bgModal');
    
    // Get the element that closes the modal
    var spans = document.getElementsByClassName("close");
    
    for (var i = 0; i < modalBtn.length; i++) 
    {
     modalBtn[i].onclick = function(e) {
        console.log(e);
        e.preventDefault();
        modal = document.querySelector(e.target.getAttribute("href"));
        console.log(modal);
        modal.style.display = "block";
     }
    }
    for (var i = 0; i < spans.length; i++) {
     spans[i].onclick = function() { 
        for (var index in modals) {
          if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none"; 
            console.log('running'); 
        }
     }
    }
    window.onclick = function(event) {
        if (event.target.classList.contains('modal')) {
         for (var index in modals) {
          if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";    
         }
        }
    }      

  }

  // function processDepartments(data)
  // {
  //   var html ="";
  //   data.forEach(function(record){
  //       html += '<a href="#"><li>'+record.name+'</li></a>';
  //   });

  //   $("#menu").html(html);   
  // }

  // function processCover(data)
  // {
  //   $("#headImage").css("backgroundImage", "url(imgs/"+data.coverImage+")"); 
  //   $("#mastImage .hero-text h1").html(data.name);
  //   $("#mastImage .hero-text1 p").html(data.year + " | "+data.intro);

    
  // }
  getData("backend/index.php?controller=works&route=getLatest",processFeatured);
  getData("backend/index.php?controller=works&route=pager&pageon=1",outputAll);
  // getData("../portback/index.php?controller=departments&route=getAll",processDepartments);

  //  getData("../portback/index.php?controller=works&route=getCover",processCover);


  });