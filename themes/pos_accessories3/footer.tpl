{*
* 2007-2014 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2014 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{if !$content_only}
					</div><!-- #center_column -->
					{if isset($right_column_size) && !empty($right_column_size)}
						<div id="right_column" class="col-xs-12 col-sm-{$right_column_size|intval} column">{$HOOK_RIGHT_COLUMN}</div>
					{/if}
					</div><!-- .row -->
					{if $page_name == 'product'}
						{if isset($HOOK_PRODUCT_FOOTER) && $HOOK_PRODUCT_FOOTER}{$HOOK_PRODUCT_FOOTER}{/if}
					{/if}
				</div><!-- #columns -->
			</div><!-- .columns-container -->
			
			<!-- Footer -->
			<div class="container">
				{hook h ="brandSlider"}
			</div>
			<div class="show-bkg"></div>
			<div class="container">
				<div class="footer-container">
					<footer id="footer">
						<div class="top-footer">
							{hook h="blockFooter1"}
							<div class="bottom-footer">
								{hook h="blockFooter2"}
							</div>
						</div>
					</footer>
				</div><!-- #footer -->
			</div>
		</div><!-- #page -->
{/if}
<div class="back-top"><a href= "#" class="mypresta_scrollup hidden-phone"></a></div>
{include file="$tpl_dir./global.tpl"}
	<script src="{$js_dir}owl.carousel.js" type="text/javascript"></script>

	</body>
</html>