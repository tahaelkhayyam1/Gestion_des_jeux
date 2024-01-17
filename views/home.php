<?php
$gamesController = new GameController();
$games = $gamesController->getAllGames();
?> 



 
 



<div id="content" class="site-content">
			<div class="ast-container">


				<div id="primary" class="content-area primary">


					<main id="main" class="site-main">
						<article class="post-7 page type-page status-publish ast-article-single" id="post-7">
							<header class="entry-header ast-header-without-markup">

							</header><!-- .entry-header -->

							<div class="entry-content clear">


								<div data-elementor-type="wp-page" data-elementor-id="7" class="elementor elementor-7">
									<section
										class="elementor-section elementor-top-section elementor-element elementor-element-1ce0d90 elementor-section-height-min-height elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
										data-id="1ce0d90" data-element_type="section"
										data-settings="{&quot;background_background&quot;:&quot;video&quot;,&quot;background_play_on_mobile&quot;:&quot;yes&quot;,&quot;shape_divider_bottom&quot;:&quot;waves&quot;}">
										<div class="elementor-shape elementor-shape-bottom" data-negative="false">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100"
     preserveAspectRatio="none">
    <path fill="#FF5733" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
        c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
        c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z" />
</svg>

										</div>
										<div class="elementor-container elementor-column-gap-default">
											<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fadfca7"
												data-id="fadfca7" data-element_type="column">
												<div class="elementor-widget-wrap">
												</div>
											</div>
										</div>
									</section>



									<!-- .fun Since 2017 -->
									<section  
										class="elementor-section elementor-top-section elementor-element elementor-element-d91521a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
										data-id="d91521a" data-element_type="section">
										<div class="elementor-container elementor-column-gap-default">
											<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3c07c4f"
												data-id="3c07c4f" data-element_type="column">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-fcbfbfb elementor-widget elementor-widget-text-editor"
														data-id="fcbfbfb" data-element_type="widget"
														data-widget_type="text-editor.default">
														<div class="elementor-widget-container">
															<h2 style="text-align: center;"><strong>Creating fun for
																	every one</strong></h2>
															<div>
																<h5>Since 2017</h5>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>










                                   





									<section>
      <div class="row">
        <h1>Our Games</h1>
      </div>
      <div class="row" id="game">




	  <?php
foreach ($games as $game) {
    echo '<div class="column">
              <div class="card">
                <div class="img-container">
                  <img src="data:image/jpeg;base64,' . base64_encode($game["image"]) . '" style="height:80px; width:80px;">
                </div>
                <h3>' . $game['nom'] . '</h3>
                <div class="icons">';

    if (!empty($game['playstore'])) {
        echo '<a href="' . $game['playstore'] . '" target="_blank">
                <i aria-hidden="true" class="fab fa-android"></i>
              </a>';
    }

    if (!empty($game['AppStore'])) {
        echo '<a href="' . $game['AppStore'] . '" target="_blank">
                <i aria-hidden="true" class="fab fa-apple"></i>
              </a>';
    }

    echo '</div>
          </div>
        </div>';
}
?>


 



		
      </div>
    </section>



 





	<style >
 
.row {
  display: flex;
  flex-wrap: wrap;
  padding: 2em 1em;
  text-align: center;
}
.column {
  width: 100%;
  padding: 0.5em 0;
  margin-bottom: 20px;
}
h1 {
  width: 100%;
  text-align: center;
  font-size: 3.5em;
  color: #1f003b;
}
.card {
  box-shadow: 0 0 2.4em rgba(25, 0, 58, 0.1);
  padding: 3.5em 1em;
  border-radius: 0.6em;
  color: #1f003b;
  cursor: pointer;
  transition: 0.3s;
  background-color: #ffffff;
}
.card .img-container {
  width: 8em;
  height: 8em;
  background-color: #a993ff;
  padding: 0.5em;
  border-radius: 50%;
  margin: 0 auto 2em auto;
}
.card img {
  width: 100%;
  border-radius: 50%;
}
.card h3 {
  font-weight: 500;
}
.card p {
  font-weight: 300;
  text-transform: uppercase;
  margin: 0.5em 0 2em 0;
  letter-spacing: 2px;
}
.icons {
	width: 50%;
  min-width: 180px;
  margin: auto;
  display: flex;
  justify-content: space-between;
}
 
.card a {
  text-decoration: none;
  color: inherit;
  font-size: 1.4em;
}
.card:hover {
  background: linear-gradient(#6045ea, #8567f7);
  color: #ffffff;
}
.card:hover .img-container {
  transform: scale(1.15);
}
@media screen and (min-width: 768px) {
  section {
    padding: 1em 7em;
  }
}
@media screen and (min-width: 992px) {
  section {
    padding: 1em;
  }
  .card {
    padding: 0.5em 1em;
  }
  .column {
    flex: 0 0 33.33%;
    max-width: 33.33%;
    padding: 0 1em;
	margin-bottom: 20px;

  }
}
</style>











 								 
								 
							
								</div>



							</div><!-- .entry-content .clear -->



						</article><!-- #post-## -->

					</main><!-- #main -->


				</div><!-- #primary -->


			</div> <!-- ast-container -->
		</div><!-- #content -->

<?php
ob_end_flush();


require_once 'views/includes/footer.php';
