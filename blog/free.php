  <iframe id="if" src="http://localhost:8888/chase/g5/bbs/board.php?bo_table=free" width="100%" height="400" frameborder="no"></iframe>
  <!-- scroll="no" -->
 <script>

window.addEventListener('message',iframeLoad);
    
  
    
function iframeLoad(e){
    console.log(e.data)
    var iframe = document.querySelector('#if');
    var a = iframe.contentWindow.document.body.scrollHeight;
    
    iframe.height = a;
    //iframe.height = e.data.page;
    
}
    
  
</script>
