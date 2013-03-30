<?php

function sys_msg($msg_detail, $link = '')
{
	echo "<script>alert(\"$msg_detail\");</script>";
	if(empty($link)) {
		echo "<script>history.go(-1);</script>";
	} else {
		echo "<script>location.href = '$link';</script>";
	}
    exit;
}

function pager($page, $page_size, $total_num, $page_url = '') {
		$total_page = ceil($total_num/$page_size);
		
		if($total_page <= 1) {
			return '';
		}

		$pagelist = "总{$total_num}篇&nbsp;页次:{$page}/{$total_page}页&nbsp;{$page_size}篇/页";

		if(1 != $page) {
			$pagelist .= '&nbsp;<a class="prev" href="'.$page_url.'&page=1">[首　页]</a>';
			$pagelist .= '&nbsp;<a class="prev" href="'.$page_url.'&page='.($page-1).'">[上一页]</a>';
		} else {
			$pagelist .= '&nbsp;[首　页]&nbsp;[上一页]';			
		}
        
		if($total_page != $page) {
			$pagelist .= '&nbsp;<a class="next" href="'.$page_url.'&page='.($page+1).'">[下一页]</a>';
			$pagelist .= '&nbsp;<a class="next" href="'.$page_url.'&page='.$total_page.'">[尾　页]</a>';
		} else {
			$pagelist .= '&nbsp;[下一页]&nbsp;[尾　页]';
		}

		$pagelist .= '&nbsp;转到:<select onchange="window.location.href=this.options[this.selectedIndex].value">';
        for($i = 1; $i <= $total_page; $i++) {

				if($i == $page) {
					$pagelist .= "<option value='{$page_url}&page={$i}' selected='selected' label='{$i}'>{$i}</option>";
				} else {
					$pagelist .= "<option value='{$page_url}&page={$i}' label='{$i}'>{$i}</option>";
				}
				
        }
		$pagelist .= '</select>';

        return $pagelist;
}



?>