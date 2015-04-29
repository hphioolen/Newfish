//add gravity forms jQuery to footer 
add_filter("gform_init_scripts_footer", __NAMESPACE__ . "\\init_scripts");
function init_scripts() {
return true;
} 