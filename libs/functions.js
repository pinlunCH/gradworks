$(function(){

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
      html += '<img class="addbybackend" src="imgs/'+record.strCoverImage+'" alt="'+record.strName+'" style="width:11%" data-id="'+record.id+'">';
    });
    html += '<a href="dept.html"><i class="fas fa-play"></i></a>'
    $(".post").html(html);  

    $(".addbybackend").on("click", function(){
    var whichID = $(this).data("id");
    getData("index.php?controller=works&route=findById&id="+whichID,showModal);
    })
  }
//output All the works from all the department 
  function outputAll(data) { 
    var html ="";
    data.forEach(function(record){
      html += '<img class="addbybackend" src="imgs/'+record.strCoverImage+'" alt="'+record.strName+'" style="width:15%" data-id="'+record.id+'">';
    });
    $(".deptImages").html(html);  

    $(".addbybackend").on("click", function(){
    var whichID = $(this).data("id");
    getData("index.php?controller=works&route=findById&id="+whichID,showModal);
    })
  }

  function showModal(data)
  {
    console.log("try to show modal but i can't");
    console.log(data);
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
  getData("index.php?controller=works&route=getLatest",processFeatured);
  getData("index.php?controller=works&route=getAll",outputAll);
  // getData("../portback/index.php?controller=departments&route=getAll",processDepartments);

  //  getData("../portback/index.php?controller=works&route=getCover",processCover);


  });