<?php 

$lang["v-friends_visited_venue"]		= "<%=tv_friends_pop.length%> Freunde waren hier.";
$lang["v-coming_soon"]		= "bald da!";
$lang["v-map"]		= "Karte";
$lang["v-description"]		= "Beschreibung";
$lang["v-friends"]		= "Freunde";
$lang["v-promoters"]		= "Promoter";
$lang["v-friend_activity"]		= "Aktivitaet deiner Freunde";
$lang["v-profile"]		= "Profil";
$lang["v-gl_t"]		= "Gaestelisten &amp; Tische";
$lang["v-events"]		= "Events";
$lang["v-no_venues_city"]		= "Noch keine neue Clubs in <%=location%>. Schau bald noch mal.";
$lang["v-jpgl"]		= "<%= user_friend.first_name + ' ' + user_friend.last_name %> joined <%= inline_link('promoters/' + notification_data.up_public_identifier, notification_data.u_full_name, {}) %>'s guest list \"<%= inline_link('promoters/' + notification_data.up_public_identifier + '/guest_lists/' + pi_link_convert(notification_data.pgla_name), notification_data.pgla_name) %>\"";
$lang["v-jtgl"]		= "<%= user_friend.first_name + ' ' + user_friend.last_name %> joined \"<%= notification_data.tgla_name %>\"";
$lang["v-friend_count_msg"]		= "<%=count%> Freunde waren hier.";
