/*Facebook LiveFeed*/
function handleResponse(response){
    

    
    var fbPost = document.getElementById("fbPost");
    for(var i=0; i<response.data.length; i++){
    var newItem = document.createElement("DIV");
    newItem.id= 'fbFont';
    var newPic = document.createElement("IMG");
    newPic.id = 'fbPic';
    /*Removes Dead Images*/
    newPic.onerror = function () { 
    this.style.display = "none";
    }
    /*//Removes Dead Images*/
    newPic.setAttribute("src", response.data[i].full_picture);
    var newDiv = document.createElement("DIV");
    newDiv.id = 'fbTime';
    var dateDiv = document.createElement("DIV");
    dateDiv.id = 'fbDate';
    var post = response.data[i].message;
    var timeStamp = response.data[i].created_time;
            
        if (post){
            var postText = document.createTextNode(post);
            var dateText = document.createTextNode(timeStamp.slice(0 ,10));
            var timeText = document.createTextNode(timeStamp.slice(11 ,19));
            
            newItem.appendChild(postText);
            fbPost.appendChild(newItem);
            newDiv.appendChild(timeText);
            fbPost.appendChild(newDiv);
            dateDiv.appendChild(dateText);
            fbPost.appendChild(dateDiv);
        }
        
        if (newPic !== undefined){
            fbPost.appendChild(newPic);
        }
     }
}
/*//Facebook LiveFeed*/



/*Image Slider*/
var p = 0;
var path = new Array();
 
// LIST OF IMAGES
path[0] = "images/siteImages/imageSlider/1.jpg";
path[1] = "images/siteImages/imageSlider/2.jpg";
path[2] = "images/siteImages/imageSlider/3.jpg";
path[3] = "images/siteImages/imageSlider/4.jpg";
path[4] = "images/siteImages/imageSlider/5.jpg";


function swapImage()
{
   document.slide.src = path[p];
   if(p < path.length - 1) p++; else p = 0;
   setTimeout("swapImage()",5000);
}
window.onload=swapImage;
/*//Image Slider*/



