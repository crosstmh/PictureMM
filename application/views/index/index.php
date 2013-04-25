<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>首页</title>
		<meta name="description" content="美女"/>
		<meta name="author" content="Mintas" />
		
		<link type="text/css" href="styles/global.css" rel="stylesheet"/>
		<link type="text/css" href="styles/index.css" rel="stylesheet"/>
		<script type="text/javascript" src="scripts/jquery1.9.1.min.js"></script>
		<script type="text/javascript" src="scripts/index.js"></script>
	</head>
	
	<body>
		<section class="index-body-wrapper">
			<!--图片走马灯效果-->
			<div class="top-plaza">
				<div id="plaza-fragment1" class="plaza-fragment plaza-fragment-focus" tag="1">
					<img src="images/mainimage1.jpg" class="plaza-image-view" width="100%" height="100%" />
				</div>
				<div id="plaza-fragment2" class="plaza-fragment" tag="2">
					<img src="images/mainimage2.jpg" class="plaza-image-view" width="100%" height="100%" />
				</div>
				<div id="plaza-fragment3" class="plaza-fragment" tag="3">
					<img src="images/mainimage1.jpg" class="plaza-image-view" width="100%" height="100%" />
				</div>
				<div id="plaza-fragment4" class="plaza-fragment" tag="4">
					<img src="images/mainimage2.jpg" class="plaza-image-view" width="100%" height="100%" />
				</div>
				
				<div class="plaza-pagers">
					<a tag="1" class="plaza-pager-btn" href="#"></a>
					<a tag="2" class="plaza-pager-btn" href="#"></a>
					<a tag="3" class="plaza-pager-btn" href="#"></a>
					<a tag="4" class="plaza-pager-btn" href="#"></a>
				</div>
			</div>
			
			<!--图片分类标签-->
			<div class="picture-tag-container">
				<div class="picture-tags">
					<div class="tag-option tag-focus">东方古典</div>
					<div class="tag-option">西方狂野</div>
					<div class="tag-option">青春亮丽</div>
					<div class="tag-option">知性魅力</div>
				</div>
				<div class="picture-tag-focus-container">
					<div class="focus-line"></div>
				</div>
			</div>
			
			<!--滑动内容-->
			<div class="slider-container">
				<div class="picture-slider">
					<div id="slider-fragment1" class="slider-fragment">
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage1.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage1.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage1.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage1.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage1.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage1.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage1.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage1.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage1.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage1.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage1.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage1.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage1.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage1.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage1.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage1.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage1.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage1.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage1.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage1.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
					</div>
					<div id="slider-fragment2" class="slider-fragment">
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testtile.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">阿斯顿发生的飞</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testtile.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">阿斯顿发生的飞</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testtile.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">阿斯顿发生的飞</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testtile.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">阿斯顿发生的飞</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testtile.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">阿斯顿发生的飞</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testtile.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">阿斯顿发生的飞</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testtile.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">阿斯顿发生的飞</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testtile.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">阿斯顿发生的飞</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testtile.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">阿斯顿发生的飞</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testtile.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">阿斯顿发生的飞</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testtile.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">阿斯顿发生的飞</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testtile.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">阿斯顿发生的飞</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testtile.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">阿斯顿发生的飞</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testtile.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">阿斯顿发生的飞</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testtile.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">阿斯顿发生的飞</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testtile.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">阿斯顿发生的飞</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testtile.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">阿斯顿发生的飞</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testtile.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">阿斯顿发生的飞</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testtile.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">阿斯顿发生的飞</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testtile.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">阿斯顿发生的飞</a>
							</div>
						</div>
					
					
					</div>
					<div id="slider-fragment3" class="slider-fragment">
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage2.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage2.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage2.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage2.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage2.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage2.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage2.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage2.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage2.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage2.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage2.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage2.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage2.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage2.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage2.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage2.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage2.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage2.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin tile-right-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage2.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
						<div class="picture-tile tile-bottom-margin">
							<img class="tile-image-view" width="100%" height="100%" src="images/testImage2.jpg"/>
							<div class="tile-desc">
								<span class="tile-desc-title">fdfdfdfd</a>
							</div>
						</div>
					</div>					
				</div>
				
				<div class="picture-slider-left">
					<a class="slider-button-left" href="javascript:void(0)"></a>
				</div>
				<div class="picture-slider-right">
					<a class="slider-button-right" href="javascript:void(0)"></a>
				</div>
			</div>
		</section>
	</body>
</html>