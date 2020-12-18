function DoSearch(searchText){
    if(searchText.value==""){
        document.getElementById("searchHint").innerHTML="";
        return;
    }
    var xhr=new XMLHttpRequest();
    xhr.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
            document.getElementById("searchHint").innerHTML=this.responseText;
        }
    };
    xhr.open("GET","SearchBooks.php?name="+searchText.value,true);
    xhr.send();
}