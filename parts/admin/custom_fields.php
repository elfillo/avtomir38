<?php
	use Carbon_Fields\Container;
	use Carbon_Fields\Field;
	add_action( 'carbon_fields_register_fields', 'contact_page' );

	function contact_page(){
		$id = get_page_data('page-contacts')->ID;

		Container::make( 'post_meta', 'Торговые точки' )
			->where( 'post_id', '=', $id )
			->add_fields( array(
				Field::make( 'complex', 'stores', 'Точки' )
					->add_fields( 'stores-list', 'Магазин', array(
						Field::make( 'image', 'stores-list--img', 'Фото' )->set_value_type( 'url' )->set_width( 30 ),
						Field::make( 'rich_text', 'stores-list--title', 'Адрес' )->set_width( 70 ),
						Field::make( 'text', 'stores-list--phone', 'Телефон' ),
						Field::make( 'text', 'stores-list--phone-link', 'Cсылка на телефон' ),
						Field::make( 'text', 'stores-list--route', 'Ссылка на 2ГИС' ),
					) )
			));
	}
?>