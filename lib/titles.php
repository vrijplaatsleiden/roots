<?php
/**
 * Page titles
 */
function roots_title() {
  if (is_home()) {
    if (get_option('page_for_posts', true)) {
      echo get_the_title(get_option('page_for_posts', true));
    } else {
      _e('Laatste berichten', 'roots');
    }
  } elseif (is_archive()) {
    $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
    if ($term) {
      echo $term->name;
    } elseif (is_post_type_archive()) {
      echo get_queried_object()->labels->name;
    } elseif (is_day()) {
      printf(__('Dagelijks archief: %s', 'roots'), get_the_date());
    } elseif (is_month()) {
      printf(__('Maandelijks archief: %s', 'roots'), get_the_date('F Y'));
    } elseif (is_year()) {
      printf(__('Jaarlijks archief: %s', 'roots'), get_the_date('Y'));
    } elseif (is_author()) {
      $author = get_queried_object();
      printf(__('Auteur archief: %s', 'roots'), $author->display_name);
    } else {
      single_cat_title();
    }
  } elseif (is_search()) {
    printf(__('Zoek resultaten voor %s', 'roots'), get_search_query());
  } elseif (is_404()) {
    _e('Niet gevonden', 'roots');
  } else {
    the_title();
  }
}
