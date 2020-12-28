
   <iframe src="http://localhost:8888/chase/g5/bbs/board.php?bo_table=notice" width="100%" height="400" frameborder="no"></iframe>

   <script>

window.addEventListener('message',iframeLoad);
    
    
function iframeLoad(e){
    var iframe = document.querySelector('#if');
    var a = iframe.contentWindow.document.body.scrollHeight;
    
    iframe.height = a;
    
    console.log(e)
}
    
    
    
</script>