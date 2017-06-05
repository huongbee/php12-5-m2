<?php
	//=== Hàm Tạo Danh Sách Các Loại Sản Phẩm ====
	function listSP($mangSP){
		$xhml = '';
		foreach($mangSP as $key => $value){
			$xhml .= '<div class="san-pham">
						<div class="thongtin-sp">
							<div class="hinh-sp">
								<img src="imgaes/'.$value['HinhSP'].'" width="170px" height="190px" />
							</div>
							<div class="mota-sp">
								<h3>'.$value['TenSP'].'</h3>
								<p>Thiết kế vô cực siêu đẹp</p>
							  <p>Camera chất lượng cao</p>
								<p>Kháng nước,kháng bụi IP68</p>
								<p class="span">Khuyến mãi</p>
								<p>Phiếu mua hàng 500.000đ</p>
								<p>Trả góp 0% qua thẻ tín dụng</p>
							</div>	
							<div class="clr"></div>
						</div>
						<div class="clr"></div>
						<div class="ten-sp">'.$value['TenSP'].'</div>
						<div class="gia-sp">'.$value['GiaSP'].'</div>
					 </div>';
		}
		return $xhml;
	}
?>