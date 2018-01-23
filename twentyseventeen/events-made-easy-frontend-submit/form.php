
	<div id="new_event_form">		
		<form id="new_post" name="new_post" method="post" action="<?php the_permalink(); ?>">
			<div class="input form-group">				
				<label for="title"><?php _e('Nome do Evento','events-made-easy-frontend-submit'); ?> <small><?php _e('Obrigatório','events-made-easy-frontend-submit'); ?></small></label><br />
				<?php EMEFS::field('event_name'); ?>
				<?php EMEFS::error('event_name'); ?>
			</div>
			
			<?php
			if (get_option('eme_categories_enabled')) { ?>
			<div class="input select form-group">
				<label for="event_category_ids"><?php _e('Selecione a Categoria do Evento','events-made-easy-frontend-submit'); ?> <small><?php _e('Obrigatório','events-made-easy-frontend-submit'); ?></small></label><br/>
				<?php EMEFS::field('event_category_ids'); ?>
				<?php EMEFS::error('event_category_ids'); ?>
			</div>
			<?php } ?>
			
			<fieldset id="dates">
				<legend><?php _e('Dia e Horário','events-made-easy-frontend-submit'); ?></legend>
				<fieldset id="event_start">
					<legend><?php _e('Inicio','events-made-easy-frontend-submit'); ?> <small><?php _e('Obrigatório','events-made-easy-frontend-submit'); ?></small></legend>
					<div class="input form-group">
						<label for="event_start_date"><?php _e('Data','events-made-easy-frontend-submit'); ?></label>
						<?php EMEFS::field('event_start_date'); ?>
						<?php EMEFS::error('event_start_date'); ?>
					</div>
					<div class="input form-group">
						<label for="event_start_time"><?php _e('Horário','events-made-easy-frontend-submit'); ?></label> 
						<?php EMEFS::field('event_start_time'); ?>
						<?php EMEFS::error('event_start_time'); ?>
					</div>
				</fieldset>
				<fieldset id="event_end">
					<legend><?php _e('Fim','events-made-easy-frontend-submit'); ?></legend>
					<div class="input form-group">
						<label for="event_end_date"><?php _e('Data','events-made-easy-frontend-submit'); ?></label>
						<?php EMEFS::field('event_end_date'); ?>
						<?php EMEFS::error('event_end_date'); ?>
					</div>
					<div class="input form-group">
						<label for="event_end_time"><?php _e('Horário','events-made-easy-frontend-submit'); ?></label> 
						<?php EMEFS::field('event_end_time'); ?>
						<?php EMEFS::error('event_end_time'); ?>
					</div>
				</fieldset>
				
				<?php EMEFS::error('event_time'); ?>
			
			</fieldset>
			
			<div class="input form-group">
				<label for="event_description"><?php _e('Descrição','events-made-easy-frontend-submit'); ?> <small><?php _e('Obrigatório','events-made-easy-frontend-submit'); ?></small></label><br />
				<?php EMEFS::field('event_notes'); ?>
				<?php EMEFS::error('event_notes'); ?>
			</div>
			
			<div class="input form-group">
				<label for="event_contactperson_email_body"><?php _e('Email de Contato','events-made-easy-frontend-submit'); ?></label><br />
				<?php EMEFS::field('event_contactperson_email_body','textarea'); ?>
				<?php EMEFS::error('event_contactperson_email_body'); ?>
			</div>
			
			<div class="input form-group">
				<label for="event_url"><?php _e('Telefone de contato','events-made-easy-frontend-submit'); ?></label><br />
				<?php EMEFS::field('event_url'); ?>
				<?php EMEFS::error('event_url'); ?>
			</div>
			
			<legend><?php _e('Local do Evento','events-made-easy-frontend-submit'); ?></legend>
			
			<div class="input form-group">
				<label for="location_name"><?php _e('Nome','events-made-easy-frontend-submit'); ?></label>
				<?php EMEFS::field('location_name'); ?>
				<?php EMEFS::error('location_name'); ?>
			</div>
			
			<div class="input form-group">
				<label for="location_address1"><?php _e('Endereço','events-made-easy-frontend-submit'); ?></label>
				<?php EMEFS::field('location_address1'); ?>
				<?php EMEFS::error('location_address1'); ?>
			</div>
			
			<div class="input form-group">
				<label for="location_city"><?php _e('Cidade e Estado','events-made-easy-frontend-submit'); ?></label>
				<?php EMEFS::field('location_city'); ?>
				<?php EMEFS::error('location_city'); ?>
			</div>

			<div class="map form-group">
				<div id="event-map"></div>
				<?php EMEFS::field('location_latitude'); ?>
				<?php EMEFS::field('location_longitude'); ?>
			</div>
			
			<p class="submit">
				<?php EMEFS::end_form(__('Enviar Evento','events-made-easy-frontend-submit')); ?>
			</p>
			
		</form>
	</div>
