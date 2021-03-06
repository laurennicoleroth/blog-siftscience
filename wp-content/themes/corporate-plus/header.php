<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AcmeThemes
 * @subpackage AcmeBlog
 */

/**
 * corporate_plus_action_before_head hook
 * @since Corporate Plus 1.0.0
 *
 * @hooked corporate_plus_set_global -  0
 * @hooked corporate_plus_doctype -  10
 */
do_action( 'corporate_plus_action_before_head' );?>
	<head>

		<?php
		/**
		 * corporate_plus_action_before_wp_head hook
		 * @since Corporate Plus 1.0.0
		 *
		 * @hooked corporate_plus_before_wp_head -  10
		 */
		do_action( 'corporate_plus_action_before_wp_head' );

		wp_head();
		?>

	</head>
<body <?php body_class();?>>

	<svg width="0" height="0" style="position:absolute">

    <symbol viewBox="0.3 0 21 19" id="icon-color-hexagon">
      <path fill="#F16B2E" d="M9.7 9.1l5.6-3.2L21 9.1v6.5l-5.7 3.2-5.6-3.2"></path>
      <path fill="#225165" d="M12.5 2.1L9.1.2 5.7 2.1v4L9.1 8l3.4-1.9"></path>
      <path fill="#26A9E0" d="M8.5 9.1L5.9 7.6 3.3 9.1V12l2.6 1.5L8.5 12"></path>
      <path fill="#F16B2E" d="M4.4 2.1L2.5 1 .6 2.1v2.2l1.9 1.2 1.9-1.2"></path>
    </symbol>

    <symbol viewBox="0 0 131 19" id="icon-color-logo">
      <path fill="#F16B2E" d="M9.4 9.1L15 5.9l5.7 3.2v6.5L15 18.8l-5.6-3.2"></path>
      <path fill="#225165" d="M12.2 2.1L8.8.2 5.4 2.1v4L8.8 8l3.4-1.9"></path>
      <path fill="#26A9E0" d="M8.2 9.1L5.6 7.6 3 9.1V12l2.6 1.5L8.2 12"></path>
      <g fill="#404041">
        <path d="M25.4 16.6l1.1-1.7c.8.8 2.3 1.5 3.7 1.5s2.2-.6 2.2-1.5c0-2.2-6.6-.6-6.6-4.8 0-1.8 1.5-3.3 4.3-3.3 1.9 0 3.3.7 4.3 1.5l-1 1.7c-.7-.8-1.9-1.3-3.3-1.3-1.3 0-2 .6-2 1.3 0 2 6.6.5 6.6 4.9 0 1.9-1.6 3.4-4.6 3.4-1.9 0-3.6-.6-4.7-1.7zM36.2 4.2c0-.8.7-1.5 1.5-1.5s1.5.7 1.5 1.5-.7 1.5-1.5 1.5-1.5-.7-1.5-1.5zm.3 13.8V7h2.4v11h-2.4zM42.3 18V9.1h-1.8V7h1.8v-.6c0-2.4 1.4-3.8 3.5-3.8 1 0 2 .2 2.6 1l-.9 1.5c-.3-.3-.7-.5-1.3-.5-.9 0-1.5.6-1.5 1.8V7h2.2v2.1h-2.2V18h-2.4z"></path>
        <path d="M48.7 15.5V9.1h-1.8V7h1.8V5.2l2.3-.8V7h2.2v2.1H51v5.8c0 .8.4 1.3 1 1.3.5 0 .9-.2 1.1-.4l.6 1.8c-.4.4-1.1.7-2.3.7-1.8 0-2.7-1-2.7-2.8zM58 16.6l1.1-1.7c.8.8 2.3 1.5 3.7 1.5 1.4 0 2.2-.6 2.2-1.5 0-2.2-6.6-.6-6.6-4.8 0-1.8 1.5-3.3 4.3-3.3 1.9 0 3.3.7 4.3 1.5L66 10c-.7-.8-1.9-1.3-3.3-1.3-1.3 0-2 .6-2 1.3 0 2 6.6.5 6.6 4.9 0 1.9-1.6 3.4-4.6 3.4-1.8 0-3.5-.6-4.7-1.7zM68.5 12.5c0-3.3 2.3-5.8 5.7-5.8 2.1 0 3.4.9 4.2 2l-1.6 1.5c-.6-.9-1.5-1.3-2.5-1.3-2 0-3.3 1.5-3.3 3.6s1.3 3.7 3.3 3.7c1.1 0 1.9-.5 2.5-1.3l1.6 1.5c-.8 1-2.1 2-4.2 2-3.4-.1-5.7-2.5-5.7-5.9zM79.6 4.2c0-.8.7-1.5 1.5-1.5s1.5.7 1.5 1.5-.7 1.5-1.5 1.5-1.5-.7-1.5-1.5zm.3 13.8V7h2.4v11h-2.4zM84.1 12.5c0-3.2 2.3-5.8 5.6-5.8s5.4 2.5 5.4 6v.6h-8.5c.2 1.7 1.4 3 3.5 3 1.1 0 2.3-.4 3.1-1.2l1.1 1.6c-1.1 1-2.7 1.6-4.5 1.6-3.2 0-5.7-2.3-5.7-5.8zm5.6-3.8c-2 0-3 1.6-3.1 2.9h6.2c-.1-1.3-.9-2.9-3.1-2.9zM104.3 18v-6.9c0-1.7-.9-2.3-2.2-2.3-1.2 0-2.3.7-2.8 1.5V18h-2.4V7h2.4v1.5c.7-.9 2.1-1.8 3.9-1.8 2.4 0 3.5 1.3 3.5 3.5V18h-2.4zM108.5 12.5c0-3.3 2.3-5.8 5.7-5.8 2.1 0 3.4.9 4.2 2l-1.6 1.5c-.6-.9-1.5-1.3-2.5-1.3-2 0-3.3 1.5-3.3 3.6s1.3 3.7 3.3 3.7c1.1 0 1.9-.5 2.5-1.3l1.6 1.5c-.8 1-2.1 2-4.2 2-3.3-.1-5.7-2.5-5.7-5.9zM119.3 12.5c0-3.2 2.3-5.8 5.6-5.8s5.4 2.5 5.4 6v.6h-8.5c.2 1.7 1.4 3 3.5 3 1.1 0 2.3-.4 3.1-1.2l1.1 1.6c-1.1 1-2.7 1.6-4.5 1.6-3.3 0-5.7-2.3-5.7-5.8zm5.5-3.8c-2 0-3 1.6-3.1 2.9h6.2c0-1.3-.9-2.9-3.1-2.9z"></path>
      </g>
      <path fill="#F16B2E" d="M4.1 2.1L2.2 1 .3 2.1v2.2l1.9 1.2 1.9-1.2"></path>
    </symbol>

    <symbol viewBox="0 0 21 19" id="icon-monochrome-hexagon">
      <path d="M9.4 9.1L15 5.9l5.7 3.2v6.5L15 18.8l-5.6-3.2M12.2 2.1L8.8.2 5.4 2.1v4L8.8 8l3.4-1.9M8.2 9.1L5.6 7.6 3 9.1V12l2.6 1.5L8.2 12M4.1 2.1L2.2 1 .3 2.1v2.2l1.9 1.2 1.9-1.2"></path>
    </symbol>

    <symbol viewBox="0 0 131 19" id="icon-monochrome-logo">
      <path d="M9.4 9.1L15 5.9l5.7 3.2v6.5L15 18.8l-5.6-3.2M12.2 2.1L8.8.2 5.4 2.1v4L8.8 8l3.4-1.9M8.2 9.1L5.6 7.6 3 9.1V12l2.6 1.5L8.2 12"></path>
      <g>
        <path d="M25.4 16.6l1.1-1.7c.8.8 2.3 1.5 3.7 1.5s2.2-.6 2.2-1.5c0-2.2-6.6-.6-6.6-4.8 0-1.8 1.5-3.3 4.3-3.3 1.9 0 3.3.7 4.3 1.5l-1 1.7c-.7-.8-1.9-1.3-3.3-1.3-1.3 0-2 .6-2 1.3 0 2 6.6.5 6.6 4.9 0 1.9-1.6 3.4-4.6 3.4-1.9 0-3.6-.6-4.7-1.7zM36.2 4.2c0-.8.7-1.5 1.5-1.5s1.5.7 1.5 1.5-.7 1.5-1.5 1.5-1.5-.7-1.5-1.5zm.3 13.8V7h2.4v11h-2.4zM42.3 18V9.1h-1.8V7h1.8v-.6c0-2.4 1.4-3.8 3.5-3.8 1 0 2 .2 2.6 1l-.9 1.5c-.3-.3-.7-.5-1.3-.5-.9 0-1.5.6-1.5 1.8V7h2.2v2.1h-2.2V18h-2.4z"></path>
        <path d="M48.7 15.5V9.1h-1.8V7h1.8V5.2l2.3-.8V7h2.2v2.1H51v5.8c0 .8.4 1.3 1 1.3.5 0 .9-.2 1.1-.4l.6 1.8c-.4.4-1.1.7-2.3.7-1.8 0-2.7-1-2.7-2.8zM58 16.6l1.1-1.7c.8.8 2.3 1.5 3.7 1.5 1.4 0 2.2-.6 2.2-1.5 0-2.2-6.6-.6-6.6-4.8 0-1.8 1.5-3.3 4.3-3.3 1.9 0 3.3.7 4.3 1.5L66 10c-.7-.8-1.9-1.3-3.3-1.3-1.3 0-2 .6-2 1.3 0 2 6.6.5 6.6 4.9 0 1.9-1.6 3.4-4.6 3.4-1.8 0-3.5-.6-4.7-1.7zM68.5 12.5c0-3.3 2.3-5.8 5.7-5.8 2.1 0 3.4.9 4.2 2l-1.6 1.5c-.6-.9-1.5-1.3-2.5-1.3-2 0-3.3 1.5-3.3 3.6s1.3 3.7 3.3 3.7c1.1 0 1.9-.5 2.5-1.3l1.6 1.5c-.8 1-2.1 2-4.2 2-3.4-.1-5.7-2.5-5.7-5.9zM79.6 4.2c0-.8.7-1.5 1.5-1.5s1.5.7 1.5 1.5-.7 1.5-1.5 1.5-1.5-.7-1.5-1.5zm.3 13.8V7h2.4v11h-2.4zM84.1 12.5c0-3.2 2.3-5.8 5.6-5.8s5.4 2.5 5.4 6v.6h-8.5c.2 1.7 1.4 3 3.5 3 1.1 0 2.3-.4 3.1-1.2l1.1 1.6c-1.1 1-2.7 1.6-4.5 1.6-3.2 0-5.7-2.3-5.7-5.8zm5.6-3.8c-2 0-3 1.6-3.1 2.9h6.2c-.1-1.3-.9-2.9-3.1-2.9zM104.3 18v-6.9c0-1.7-.9-2.3-2.2-2.3-1.2 0-2.3.7-2.8 1.5V18h-2.4V7h2.4v1.5c.7-.9 2.1-1.8 3.9-1.8 2.4 0 3.5 1.3 3.5 3.5V18h-2.4zM108.5 12.5c0-3.3 2.3-5.8 5.7-5.8 2.1 0 3.4.9 4.2 2l-1.6 1.5c-.6-.9-1.5-1.3-2.5-1.3-2 0-3.3 1.5-3.3 3.6s1.3 3.7 3.3 3.7c1.1 0 1.9-.5 2.5-1.3l1.6 1.5c-.8 1-2.1 2-4.2 2-3.3-.1-5.7-2.5-5.7-5.9zM119.3 12.5c0-3.2 2.3-5.8 5.6-5.8s5.4 2.5 5.4 6v.6h-8.5c.2 1.7 1.4 3 3.5 3 1.1 0 2.3-.4 3.1-1.2l1.1 1.6c-1.1 1-2.7 1.6-4.5 1.6-3.3 0-5.7-2.3-5.7-5.8zm5.5-3.8c-2 0-3 1.6-3.1 2.9h6.2c0-1.3-.9-2.9-3.1-2.9z"></path>
      </g>
      <path d="M4.1 2.1L2.2 1 .3 2.1v2.2l1.9 1.2 1.9-1.2"></path>
    </symbol>

    <symbol viewBox="0 12 500 75" id="icon-footer-logo">
      <path fill="#F16B2E" d="M36.1 48.1l21.5-12.5 21.5 12.5V73L57.6 85.3 36.1 73"></path>
      <path fill="#618B9E" d="M46.7 21.2l-13.1-7.5-13 7.5v15.2l13 7.6 13.1-7.6"></path>
      <path fill="#26A9E0" d="M31.2 47.9l-9.7-5.8-9.9 5.8v11.3l9.9 5.8 9.7-5.8"></path>
      <g fill="#FFF">
        <path d="M97.2 76.7l4.1-6.5c3 3 8.8 6 14.2 6s8.2-2.4 8.2-5.6c0-8.2-25.4-2.4-25.4-18.5 0-6.9 6-12.7 16.4-12.7 7.1 0 12.5 2.4 16.4 6l-3.7 6.4c-2.6-2.8-7.3-5-12.5-5-4.9 0-7.9 2.2-7.9 5 0 7.5 25.4 1.9 25.4 18.7 0 7.5-6.2 13.1-17.6 13.1-6.6-.3-13.1-2.6-17.6-6.9zM138.5 29.4c0-3.2 2.6-5.6 5.6-5.6 3.2 0 5.6 2.4 5.6 5.6s-2.4 5.6-5.6 5.6c-3 0-5.6-2.6-5.6-5.6zm1.3 52.7v-42h9.2v42.1h-9.2zM162.1 82.1v-34h-6.9v-8h6.9v-2.4c0-9.2 5.2-14.6 13.3-14.6 3.7 0 7.5.9 10.1 3.7l-3.6 5.6c-1.3-1.1-2.8-1.9-4.9-1.9-3.6 0-5.8 2.4-5.8 7.1V40h8.6v8h-8.6v34h-9.1z"></path>
        <path d="M186.4 72.4V48.1h-6.9v-8h6.9V33l9.2-3v10.1h8.6v8h-8.6v22.1c0 2.8 1.3 5 3.9 5 1.7 0 3.4-.7 4.1-1.5l2.2 6.9c-1.7 1.5-4.3 2.6-8.6 2.6-7.1.1-10.8-3.9-10.8-10.8zM222.2 76.7l4.1-6.5c3 3 8.8 6 14.2 6 5.4 0 8.2-2.4 8.2-5.6 0-8.2-25.4-2.4-25.4-18.5 0-6.9 6-12.7 16.4-12.7 7.1 0 12.5 2.4 16.4 6l-3.7 6.4c-2.6-2.8-7.3-5-12.5-5-4.9 0-7.9 2.2-7.9 5 0 7.5 25.4 1.9 25.4 18.7 0 7.5-6.2 13.1-17.6 13.1-6.7-.3-13.3-2.6-17.6-6.9zM262.2 61c0-12.7 9-22.1 21.7-22.1 8.2 0 13.1 3.6 16.1 7.5l-6 5.6c-2.4-3.4-5.6-5-9.7-5-7.7 0-12.7 5.8-12.7 13.8 0 8.2 5 14 12.7 14 4.1 0 7.3-1.7 9.7-5l6 5.6c-3 3.9-7.9 7.5-16.1 7.5-12.7.4-21.7-9-21.7-21.9zM304.7 29.4c0-3.2 2.6-5.6 5.6-5.6 3.2 0 5.6 2.4 5.6 5.6s-2.6 5.6-5.6 5.6-5.6-2.6-5.6-5.6zm1.1 52.7v-42h9.2v42.1h-9.2zM322.1 61c0-12.1 8.8-22.1 21.3-22.1 12.7 0 20.7 9.7 20.7 22.8v2.4h-32.5c.7 6.4 5.4 11.6 13.5 11.6 4.1 0 9-1.7 12-4.7l4.1 6c-4.1 3.9-10.3 6.2-17 6.2-12.8.1-22.1-8.7-22.1-22.2zm21.3-14.4c-7.9 0-11.4 6-11.8 11.2h23.6c-.2-5-3.6-11.2-11.8-11.2zM399.3 82.1V55.8c0-6.5-3.4-8.8-8.4-8.8-4.7 0-8.8 2.8-10.8 5.6V82h-9.2V40.1h9.2v5.8c2.8-3.4 8.2-6.7 14.8-6.7 9 0 13.6 4.9 13.6 13.5v29.5h-9.2zM415.5 61c0-12.7 9-22.1 21.7-22.1 8.2 0 13.1 3.6 16.1 7.5l-6 5.6c-2.4-3.4-5.6-5-9.7-5-7.7 0-12.7 5.8-12.7 13.8 0 8.2 5 14 12.7 14 4.1 0 7.3-1.7 9.7-5l6 5.6c-3 3.9-7.9 7.5-16.1 7.5-12.7.4-21.7-9-21.7-21.9zM456.6 61c0-12.1 8.8-22.1 21.3-22.1 12.7 0 20.7 9.7 20.7 22.8v2.4h-32.5c.7 6.4 5.4 11.6 13.5 11.6 4.1 0 9-1.7 12-4.7l4.1 6c-4.1 3.9-10.3 6.2-17 6.2-12.7.1-22.1-8.7-22.1-22.2zm21.3-14.4c-7.9 0-11.4 6-11.8 11.2h23.6c-.2-5-3.5-11.2-11.8-11.2z"></path>
        </g>
        <path fill="#F16B2E" d="M15.7 21.2l-7.3-4.1-7.3 4.1v8.6l7.3 4.3 7.3-4.3"></path>
      </symbol>

      <symbol viewBox="0 0 21 15" id="icon-envelope">
        <path d="M.9 1.5c.6.3 8.3 5.1 8.6 5.2.3.2.7.3 1 .3.4 0 .7-.1 1-.3.3-.2 8-4.9 8.6-5.3.5-.3 1-1.4 0-1.4H.8c-1 0-.5 1.1.1 1.5zm19.5 2.6c-.6.4-8.5 5-8.9 5.2-.4.2-.7.3-1.1.3-.4 0-.7 0-1.1-.3C9 9.1 1.2 4.5.5 4.1c-.4-.2-.5.1-.5.3v9.5c0 .5.8 1.1 1.3 1.1h18.3c.5 0 1.4-.6 1.4-1.1V4.4c0-.2-.1-.5-.6-.3z"></path>
      </symbol>

      <symbol viewBox="0 0 42.2 48.7" id="icon-search">
        <path d="M23.1 8.3c-2-2.5-5-4-8.2-4-2.4 0-4.6.8-6.4 2.2-2.2 1.7-3.6 4.2-3.9 7S5 19 6.7 21.2c2 2.5 5 4 8.2 4 2.4 0 4.6-.8 6.4-2.2 4.6-3.6 5.4-10.2 1.8-14.7zm-3 13.1c-1.5 1.2-3.3 1.8-5.2 1.8-2.6 0-5-1.2-6.7-3.2C5.4 16.3 6 11 9.7 8.1c1.5-1.2 3.3-1.8 5.2-1.8 2.6 0 5 1.2 6.7 3.2 2.8 3.7 2.2 9-1.5 11.9z"></path>
        <path d="M41.5 40.6l-7.2-9.2c-.6-.8-1.6-1.3-2.7-1.3h-.4l-5.1-6.5c1.6-2.1 2.7-4.5 3-7.2.5-3.9-.6-7.7-3-10.8C23.3 2 19.1 0 14.6 0c-3.3 0-6.4 1.1-9 3.1-6.3 5-7.5 14.2-2.5 20.5 2.8 3.6 7 5.6 11.5 5.6 2.1 0 4.1-.4 6-1.3l4.9 6.2c-.3.4-.5.9-.6 1.5-.1.9.1 1.8.7 2.5l7.2 9.2c.6.8 1.6 1.3 2.7 1.3.8 0 1.5-.3 2.1-.7l3.3-2.6c1.5-1.1 1.8-3.2.6-4.7zM4.7 22.4C.4 16.9 1.4 9 6.8 4.7c2.3-1.8 5-2.7 7.8-2.7 3.9 0 7.5 1.8 9.9 4.8 2.1 2.7 3 6 2.6 9.3-.4 3.3-2.1 6.3-4.7 8.4-2.2 1.8-4.9 2.7-7.8 2.7-3.9 0-7.5-1.7-9.9-4.8zm18.9 3.7c.4-.3.8-.7 1.2-1l4.6 5.8-2.4 1.9-4.6-5.8 1.2-.9zm16.1 17.7l-3.3 2.6c-.6.5-1.5.3-1.9-.2L27.3 37c-.4-.5-.4-1.1 0-1.6l4-3.2c.1 0 .3-.1.4-.1.4 0 .8.2 1.1.5l7.2 9.2c.4.6.3 1.5-.3 2z"></path>
      </symbol>
  </svg>

<?php
/**
 * corporate_plus_action_before hook
 * @since Corporate Plus 1.0.0
 *
 * @hooked corporate_plus_site_start - 20
 */
//do_action( 'corporate_plus_action_before' );

/**
 * corporate_plus_action_before_header hook
 * @since Corporate Plus 1.0.0
 *
 * @hooked corporate_plus_skip_to_content - 10
 */
//do_action( 'corporate_plus_action_before_header' );


/**
 * corporate_plus_action_header hook
 * @since Corporate Plus 1.0.0
 *
 * @hooked corporate_plus_header - 10
 */
do_action( 'corporate_plus_action_header' );


/**
 * corporate_plus_action_after_header hook
 * @since Corporate Plus 1.0.0
 *
 * @hooked null
 */
do_action( 'corporate_plus_action_after_header' );


/**
 * corporate_plus_action_before_content hook
 * @since Corporate Plus 1.0.0
 *
 * @hooked null
 */
//do_action( 'corporate_plus_action_before_content' );