
				<!-- Footer -->
                <footer id="footer">
						<div class="inner">
							<?php
							// On insere un menu à l'aide de wp_nav_menu
							wp_nav_menu ( array (
							// ce menu correspond à l'emplacement 'menu-principal'
							// défini dans functions.php
							'theme_location' => 'menu-footer' , 
							// Le type de container global
							// on laisse vide, on ne veut pas de container
							'container'       => '',
							// La class du conteneur global
							'container_class' => '',
							// l'ID du conteneur global
							'container_id'    => '',
							// la classe du menu (qui est un 'ul')
							'menu_class'      => 'icons',
							// l'ID du menu
							'menu_id'         => '',
							// à l'interieur de chaque élément li, juste après le <li>
							'before'          => '',
							// à l'interieur de chaque élément li, juste avant le </li>
							'after'           => '',
							// à l'interieur de chaque élément a, juste après le <a href...>
							'link_before'     => '<span class="label">',
							// à l'interieur de chaque élément a, juste avant le </a>
							'link_after'      => '</span>',
							//niveau de profondeur d’affichage. 1 n’affiche que le 1er niveau. 
							// 0 affiche tout. -1 permet de tout afficher sur un seul niveau.
							'depth'           => 0
							) );
							?>
							<ul class="copyright">
								<li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
            <?php wp_footer(); ?>
	</body>
</html>