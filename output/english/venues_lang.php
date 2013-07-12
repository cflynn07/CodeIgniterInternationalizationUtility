<?php 

$lang["v-friends_visited_venue"]		= "<%=tv_friends_pop.length%> friend(s) have been here.";
$lang["v-coming_soon"]		= "Coming Soon!";
$lang["v-map"]		= "Map";
$lang["v-description"]		= "Description";
$lang["v-friends"]		= "Friends";
$lang["v-promoters"]		= "Promoters";
$lang["v-friend_activity"]		= "Friend Activity";
$lang["v-profile"]		= "Profile";
$lang["v-gl_t"]		= "Guest Lists &amp; Tables";
$lang["v-events"]		= "Events";
$lang["v-no_venues_city"]		= "No venues in <%=location%> yet! Check back soon.";
$lang["v-jpgl"]		= "<%= user_friend.first_name + ' ' + user_friend.last_name %> joined <%= inline_link('promoters/' + notification_data.up_public_identifier, notification_data.u_full_name, {}) %>'s guest list \"<%= inline_link('promoters/' + notification_data.up_public_identifier + '/guest_lists/' + pi_link_convert(notification_data.pgla_name), notification_data.pgla_name) %>\"";
$lang["v-jtgl"]		= "<%= user_friend.first_name + ' ' + user_friend.last_name %> joined \"<%= notification_data.tgla_name %>\"";
$lang["v-friend_count_msg"]		= "<%=count%> friends have been here.";
