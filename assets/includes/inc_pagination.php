<strong>
	<?php if($pagenum > 0){?>   
        <a href="<?php printf("%s?pagenum=%d%s",$currentpage,0, $queryString);?>">First</a>
     <?php }else{echo "First";}?>
     
    <?php if($pagenum > 0){?>   
        <a href="<?php printf("%s?pagenum=%d%s",$currentpage,max(0, $pagenum - 1), $queryString);?>">Previous</a> 
    <?php }else{echo "Previous";}?>
       
     <?php if($pagenum < $totalpages){?>   
        <a href="<?php printf("%s?pagenum=%d%s",$currentpage,min($totalpages, $pagenum + 1), $queryString);?>">Next</a>
     <?php }else{echo "Next";}?>
     
     <?php if($pagenum < $totalpages){?>   
        <a href="<?php printf("%s?pagenum=%d%s",$currentpage,$totalpages, $queryString);?>">Last</a>
     <?php }else{echo "Last";}?>
</strong>