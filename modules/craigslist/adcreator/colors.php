<style>
#bg_color option {opacity: 1.0;filter:alpha(opacity=100);}
#fg_color option {opacity: 1.0;filter:alpha(opacity=100);}
#ft_color option {opacity: 1.0;filter:alpha(opacity=100);}
#hl_color option {opacity: 1.0;filter:alpha(opacity=100);}

</style>
<div style="width:25%;float:left;"> 
Background color:<select name="bg_color" id="bg_color"> 
<option value="#87cefa" style="background:#87cefa" <?php if ((isset($bg_color))&&($bg_color=="#87cefa")) { echo "selected"; unset($bg_color);} if (!isset($bg_color)) echo "selected";?> >Default</option>
<option value="#f0f8ff" style="background:#f0f8ff" <?php if ((isset($bg_color))&&($bg_color=="#f0f8ff")) echo "selected";?> >Alice Blue</option>
<option value="#faebd7" style="background:#faebd7" <?php if ((isset($bg_color))&&($bg_color=="#faebd7")) echo "selected";?> >Antique White</option>
<option value="#00ffff" style="background:#00ffff" <?php if ((isset($bg_color))&&($bg_color=="#00ffff")) echo "selected";?> >Aqua</option>
<option value="#7fffd4" style="background:#7fffd4" <?php if ((isset($bg_color))&&($bg_color=="#7fffd4")) echo "selected";?> >Aquamarine</option>
<option value="#f0ffff" style="background:#f0ffff" <?php if ((isset($bg_color))&&($bg_color=="#f0ffff")) echo "selected";?> >Azure</option>
<option value="#f5f5dc" style="background:#f5f5dc" <?php if ((isset($bg_color))&&($bg_color=="#f5f5dc")) echo "selected";?> >Beige</option>
<option value="#ffe4c4" style="background:#ffe4c4" <?php if ((isset($bg_color))&&($bg_color=="#ffe4c4")) echo "selected";?> >Bisque</option>
<option value="#000000" style="background:#000000" <?php if ((isset($bg_color))&&($bg_color=="#000000")) echo "selected";?> >Black</option>
<option value="#ffebcd" style="background:#ffebcd" <?php if ((isset($bg_color))&&($bg_color=="#ffebcd")) echo "selected";?> >Blanched Almond</option>
<option value="#0000ff" style="background:#0000ff" <?php if ((isset($bg_color))&&($bg_color=="#0000ff")) echo "selected";?> >Blue</option>
<option value="#8a2be2" style="background:#8a2be2" <?php if ((isset($bg_color))&&($bg_color=="#8a2be2")) echo "selected";?> >Blue Violet</option>
<option value="#a52a2a" style="background:#a52a2a" <?php if ((isset($bg_color))&&($bg_color=="#a52a2a")) echo "selected";?> >Brown</option>
<option value="#deb887" style="background:#deb887" <?php if ((isset($bg_color))&&($bg_color=="#deb887")) echo "selected";?> >Burly Wood</option>
<option value="#5f9ea0" style="background:#5f9ea0" <?php if ((isset($bg_color))&&($bg_color=="#5f9ea0")) echo "selected";?> >Cadet Blue</option>
<option value="#7fff00" style="background:#7fff00" <?php if ((isset($bg_color))&&($bg_color=="#7fff00")) echo "selected";?> >Chartreuse</option>
<option value="#d2691e" style="background:#d2691e" <?php if ((isset($bg_color))&&($bg_color=="#d2691e")) echo "selected";?> >Chocolate</option>
<option value="#ff7f50" style="background:#ff7f50" <?php if ((isset($bg_color))&&($bg_color=="#ff7f50")) echo "selected";?> >Coral</option>
<option value="#6495ed" style="background:#6495ed" <?php if ((isset($bg_color))&&($bg_color=="#6495ed")) echo "selected";?> >Cornflower Blue</option>
<option value="#fff8dc" style="background:#fff8dc" <?php if ((isset($bg_color))&&($bg_color=="#fff8dc")) echo "selected";?> >Cornsilk</option>
<option value="#dc143c" style="background:#dc143c" <?php if ((isset($bg_color))&&($bg_color=="#dc143c")) echo "selected";?> >Crimson</option>
<option value="#00ffff" style="background:#00ffff" <?php if ((isset($bg_color))&&($bg_color=="#00ffff")) echo "selected";?> >Cyan</option>
<option value="#00008b" style="background:#00008b" <?php if ((isset($bg_color))&&($bg_color=="#00008b")) echo "selected";?> >Dark Blue</option>
<option value="#008b8b" style="background:#008b8b" <?php if ((isset($bg_color))&&($bg_color=="#008b8b")) echo "selected";?> >Dark Cyan</option>
<option value="#b8860b" style="background:#b8860b" <?php if ((isset($bg_color))&&($bg_color=="#b8860b")) echo "selected";?> >Dark Golden Rod</option>
<option value="#a9a9a9" style="background:#a9a9a9" <?php if ((isset($bg_color))&&($bg_color=="#a9a9a9")) echo "selected";?> >Dark Gray</option>
<option value="#006400" style="background:#006400" <?php if ((isset($bg_color))&&($bg_color=="#006400")) echo "selected";?> >Dark Green</option>
<option value="#bdb76b" style="background:#bdb76b" <?php if ((isset($bg_color))&&($bg_color=="#bdb76b")) echo "selected";?> >Dark Khaki</option>
<option value="#8b008b" style="background:#8b008b" <?php if ((isset($bg_color))&&($bg_color=="#8b008b")) echo "selected";?> >Dark Magenta</option>
<option value="#556b2f" style="background:#556b2f" <?php if ((isset($bg_color))&&($bg_color=="#556b2f")) echo "selected";?> >Dark Olive Green</option>
<option value="#ff8c00" style="background:#ff8c00" <?php if ((isset($bg_color))&&($bg_color=="#ff8c00")) echo "selected";?> >Dark Orange</option>
<option value="#9932cc" style="background:#9932cc" <?php if ((isset($bg_color))&&($bg_color=="#9932cc")) echo "selected";?> >Dark Orchid</option>
<option value="#8b0000" style="background:#8b0000" <?php if ((isset($bg_color))&&($bg_color=="#8b0000")) echo "selected";?> >Dark Red</option>
<option value="#e9967a" style="background:#e9967a" <?php if ((isset($bg_color))&&($bg_color=="#e9967a")) echo "selected";?> >Dark Salmon</option>
<option value="#8fbc8f" style="background:#8fbc8f" <?php if ((isset($bg_color))&&($bg_color=="#8fbc8f")) echo "selected";?> >Dark SeaGreen</option>
<option value="#483d8b" style="background:#483d8b" <?php if ((isset($bg_color))&&($bg_color=="#483d8b")) echo "selected";?> >Dark SlateBlue</option>
<option value="#2f4f4f" style="background:#2f4f4f" <?php if ((isset($bg_color))&&($bg_color=="#2f4f4f")) echo "selected";?> >Dark SlateGray</option>
<option value="#00ced1" style="background:#00ced1" <?php if ((isset($bg_color))&&($bg_color=="#00ced1")) echo "selected";?> >Dark Turquoise</option>
<option value="#9400d3" style="background:#9400d3" <?php if ((isset($bg_color))&&($bg_color=="#9400d3")) echo "selected";?> >Dark Violet</option>
<option value="#ff1493" style="background:#ff1493" <?php if ((isset($bg_color))&&($bg_color=="#ff1493")) echo "selected";?> >DeepPink</option>
<option value="#00bfff" style="background:#00bfff" <?php if ((isset($bg_color))&&($bg_color=="#00bfff")) echo "selected";?> >Deep Sky Blue</option>
<option value="#696969" style="background:#696969" <?php if ((isset($bg_color))&&($bg_color=="#696969")) echo "selected";?> >Dim Gray</option>
<option value="#1e90ff" style="background:#1e90ff" <?php if ((isset($bg_color))&&($bg_color=="#1e90ff")) echo "selected";?> >Dodger Blue</option>
<option value="#b22222" style="background:#b22222" <?php if ((isset($bg_color))&&($bg_color=="#b22222")) echo "selected";?> >Fire Brick</option>
<option value="#fffaf0" style="background:#fffaf0" <?php if ((isset($bg_color))&&($bg_color=="#fffaf0")) echo "selected";?> >Floral White</option>
<option value="#228b22" style="background:#228b22" <?php if ((isset($bg_color))&&($bg_color=="#228b22")) echo "selected";?> >Forest Green</option>
<option value="#ff00ff" style="background:#ff00ff" <?php if ((isset($bg_color))&&($bg_color=="#ff00ff")) echo "selected";?> >Fuchsia</option>
<option value="#dcdcdc" style="background:#dcdcdc" <?php if ((isset($bg_color))&&($bg_color=="#dcdcdc")) echo "selected";?> >Gainsboro</option>
<option value="#f8f8ff" style="background:#f8f8ff" <?php if ((isset($bg_color))&&($bg_color=="#f8f8ff")) echo "selected";?> >Ghost White</option>
<option value="#ffd700" style="background:#ffd700" <?php if ((isset($bg_color))&&($bg_color=="#ffd700")) echo "selected";?> >Gold</option>
<option value="#daa520" style="background:#daa520" <?php if ((isset($bg_color))&&($bg_color=="#daa520")) echo "selected";?> >Golden Rod</option>
<option value="#808080" style="background:#808080" <?php if ((isset($bg_color))&&($bg_color=="#808080")) echo "selected";?> >Gray</option>
<option value="#008000" style="background:#008000" <?php if ((isset($bg_color))&&($bg_color=="#008000")) echo "selected";?> >Green</option>
<option value="#adff2f" style="background:#adff2f" <?php if ((isset($bg_color))&&($bg_color=="#adff2f")) echo "selected";?> >Green Yellow</option>
<option value="#f0fff0" style="background:#f0fff0" <?php if ((isset($bg_color))&&($bg_color=="#f0fff0")) echo "selected";?> >Honey Dew</option>
<option value="#ff69b4" style="background:#ff69b4" <?php if ((isset($bg_color))&&($bg_color=="#ff69b4")) echo "selected";?> >Hot Pink</option>
<option value="#cd5c5c" style="background:#cd5c5c" <?php if ((isset($bg_color))&&($bg_color=="#cd5c5c")) echo "selected";?> >Indian Red</option>
<option value="#4b0082" style="background:#4b0082" <?php if ((isset($bg_color))&&($bg_color=="#4b0082")) echo "selected";?> >Indigo</option>
<option value="#fffff0" style="background:#fffff0" <?php if ((isset($bg_color))&&($bg_color=="#fffff0")) echo "selected";?> >Ivory</option>
<option value="#f0e68c" style="background:#f0e68c" <?php if ((isset($bg_color))&&($bg_color=="#f0e68c")) echo "selected";?> >Khaki</option>
<option value="#e6e6fa" style="background:#e6e6fa" <?php if ((isset($bg_color))&&($bg_color=="#e6e6fa")) echo "selected";?> >Lavender</option>
<option value="#fff0f5" style="background:#fff0f5" <?php if ((isset($bg_color))&&($bg_color=="#fff0f5")) echo "selected";?> >Lavender Blush</option>
<option value="#7cfc00" style="background:#7cfc00" <?php if ((isset($bg_color))&&($bg_color=="#7cfc00")) echo "selected";?> >Lawn Green</option>
<option value="#fffacd" style="background:#fffacd" <?php if ((isset($bg_color))&&($bg_color=="#fffacd")) echo "selected";?> >Lemon Chiffon</option>
<option value="#add8e6" style="background:#add8e6" <?php if ((isset($bg_color))&&($bg_color=="#add8e6")) echo "selected";?> >Light Blue</option>
<option value="#f08080" style="background:#f08080" <?php if ((isset($bg_color))&&($bg_color=="#f08080")) echo "selected";?> >Light Coral</option>
<option value="#e0ffff" style="background:#e0ffff" <?php if ((isset($bg_color))&&($bg_color=="#e0ffff")) echo "selected";?> >Light Cyan</option>
<option value="#fafad2" style="background:#fafad2" <?php if ((isset($bg_color))&&($bg_color=="#fafad2")) echo "selected";?> >Light Golden Rod Yellow</option>
<option value="#d3d3d3" style="background:#d3d3d3" <?php if ((isset($bg_color))&&($bg_color=="#d3d3d3")) echo "selected";?> >Light Gray</option>
<option value="#90ee90" style="background:#90ee90" <?php if ((isset($bg_color))&&($bg_color=="#90ee90")) echo "selected";?> >Light Green</option>
<option value="#ffb6c1" style="background:#ffb6c1" <?php if ((isset($bg_color))&&($bg_color=="#ffb6c1")) echo "selected";?> >Light Pink</option>
<option value="#ffa07a" style="background:#ffa07a" <?php if ((isset($bg_color))&&($bg_color=="#ffa07a")) echo "selected";?> >Light Salmon</option>
<option value="#20b2aa" style="background:#20b2aa" <?php if ((isset($bg_color))&&($bg_color=="#20b2aa")) echo "selected";?> >Light SeaGreen</option>
<option value="#87cefa" style="background:#87cefa" <?php if ((isset($bg_color))&&($bg_color=="#87cefa")) echo "selected";?> >Light Sky Blue</option>
<option value="#778899" style="background:#778899" <?php if ((isset($bg_color))&&($bg_color=="#778899")) echo "selected";?> >Light Slate Gray</option>
<option value="#b0c4de" style="background:#b0c4de" <?php if ((isset($bg_color))&&($bg_color=="#b0c4de")) echo "selected";?> >Light Steel Blue</option>
<option value="#ffffe0" style="background:#ffffe0" <?php if ((isset($bg_color))&&($bg_color=="#ffffe0")) echo "selected";?> >Light Yellow</option>
<option value="#00ff00" style="background:#00ff00" <?php if ((isset($bg_color))&&($bg_color=="#00ff00")) echo "selected";?> >Lime</option>
<option value="#32cd32" style="background:#32cd32" <?php if ((isset($bg_color))&&($bg_color=="#32cd32")) echo "selected";?> >LimeGreen</option>
<option value="#faf0e6" style="background:#faf0e6" <?php if ((isset($bg_color))&&($bg_color=="#faf0e6")) echo "selected";?> >Linen</option>
<option value="#ff00ff" style="background:#ff00ff" <?php if ((isset($bg_color))&&($bg_color=="#ff00ff")) echo "selected";?> >Magenta</option>
<option value="#800000" style="background:#800000" <?php if ((isset($bg_color))&&($bg_color=="#800000")) echo "selected";?> >Maroon</option>
<option value="#66cdaa" style="background:#66cdaa" <?php if ((isset($bg_color))&&($bg_color=="#66cdaa")) echo "selected";?> >Medium Aqua Marine</option>
<option value="#0000cd" style="background:#0000cd" <?php if ((isset($bg_color))&&($bg_color=="#0000cd")) echo "selected";?> >Medium Blue</option>
<option value="#ba55d3" style="background:#ba55d3" <?php if ((isset($bg_color))&&($bg_color=="#ba55d3")) echo "selected";?> >Medium Orchid</option>
<option value="#9370d8" style="background:#9370d8" <?php if ((isset($bg_color))&&($bg_color=="#9370d8")) echo "selected";?> >Medium Purple</option>
<option value="#3cb371" style="background:#3cb371" <?php if ((isset($bg_color))&&($bg_color=="#3cb371")) echo "selected";?> >Medium Sea Green</option>
<option value="#7b68ee" style="background:#7b68ee" <?php if ((isset($bg_color))&&($bg_color=="#7b68ee")) echo "selected";?> >Medium Slate Blue</option>
<option value="#00fa9a" style="background:#00fa9a" <?php if ((isset($bg_color))&&($bg_color=="#00fa9a")) echo "selected";?> >Medium Spring Green</option>
<option value="#48d1cc" style="background:#48d1cc" <?php if ((isset($bg_color))&&($bg_color=="#48d1cc")) echo "selected";?> >Medium Turquoise</option>
<option value="#c71585" style="background:#c71585" <?php if ((isset($bg_color))&&($bg_color=="#c71585")) echo "selected";?> >Medium Violet Red</option>
<option value="#191970" style="background:#191970" <?php if ((isset($bg_color))&&($bg_color=="#191970")) echo "selected";?> >Midnight Blue</option>
<option value="#f5fffa" style="background:#f5fffa" <?php if ((isset($bg_color))&&($bg_color=="#f5fffa")) echo "selected";?> >Mint Cream</option>
<option value="#ffe4e1" style="background:#ffe4e1" <?php if ((isset($bg_color))&&($bg_color=="#ffe4e1")) echo "selected";?> >Misty Rose</option>
<option value="#ffe4b5" style="background:#ffe4b5" <?php if ((isset($bg_color))&&($bg_color=="#ffe4b5")) echo "selected";?> >Moccasin</option>
<option value="#ffdead" style="background:#ffdead" <?php if ((isset($bg_color))&&($bg_color=="#ffdead")) echo "selected";?> >Navajo White</option>
<option value="#000080" style="background:#000080" <?php if ((isset($bg_color))&&($bg_color=="#000080")) echo "selected";?> >Navy</option>
<option value="#fdf5e6" style="background:#fdf5e6" <?php if ((isset($bg_color))&&($bg_color=="#fdf5e6")) echo "selected";?> >Old Lace</option>
<option value="#808000" style="background:#808000" <?php if ((isset($bg_color))&&($bg_color=="#808000")) echo "selected";?> >Olive</option>
<option value="#6b8e23" style="background:#6b8e23" <?php if ((isset($bg_color))&&($bg_color=="#6b8e23")) echo "selected";?> >Olive Drab</option>
<option value="#ffa500" style="background:#ffa500" <?php if ((isset($bg_color))&&($bg_color=="#ffa500")) echo "selected";?> >Orange</option>
<option value="#ff4500" style="background:#ff4500" <?php if ((isset($bg_color))&&($bg_color=="#ff4500")) echo "selected";?> >Orange Red</option>
<option value="#eee8aa" style="background:#eee8aa" <?php if ((isset($bg_color))&&($bg_color=="#eee8aa")) echo "selected";?> >Pale Golden Rod</option>
<option value="#98fb98" style="background:#98fb98" <?php if ((isset($bg_color))&&($bg_color=="#98fb98")) echo "selected";?> >Pale Green</option>
<option value="#afeeee" style="background:#afeeee" <?php if ((isset($bg_color))&&($bg_color=="#afeeee")) echo "selected";?> >Pale Turquoise</option>
<option value="#d87093" style="background:#d87093" <?php if ((isset($bg_color))&&($bg_color=="#d87093")) echo "selected";?> >Pale Violet Red</option>
<option value="#ffefd5" style="background:#ffefd5" <?php if ((isset($bg_color))&&($bg_color=="#ffefd5")) echo "selected";?> >Papaya Whip</option>
<option value="#ffdab9" style="background:#ffdab9" <?php if ((isset($bg_color))&&($bg_color=="#ffdab9")) echo "selected";?> >Peach Puff</option>
<option value="#cd853f" style="background:#cd853f" <?php if ((isset($bg_color))&&($bg_color=="#cd853f")) echo "selected";?> >Peru</option>
<option value="#ffc0cb" style="background:#ffc0cb" <?php if ((isset($bg_color))&&($bg_color=="#ffc0cb")) echo "selected";?> >Pink</option>
<option value="#dda0dd" style="background:#dda0dd" <?php if ((isset($bg_color))&&($bg_color=="#dda0dd")) echo "selected";?> >Plum</option>
<option value="#b0e0e6" style="background:#b0e0e6" <?php if ((isset($bg_color))&&($bg_color=="#b0e0e6")) echo "selected";?> >Powder Blue</option>
<option value="#800080" style="background:#800080" <?php if ((isset($bg_color))&&($bg_color=="#800080")) echo "selected";?> >Purple</option>
<option value="#ff0000" style="background:#ff0000" <?php if ((isset($bg_color))&&($bg_color=="#ff0000")) echo "selected";?> >Red</option>
<option value="#bc8f8f" style="background:#bc8f8f" <?php if ((isset($bg_color))&&($bg_color=="#bc8f8f")) echo "selected";?> >Rosy Brown</option>
<option value="#4169e1" style="background:#4169e1" <?php if ((isset($bg_color))&&($bg_color=="#4169e1")) echo "selected";?> >Royal Blue</option>
<option value="#8b4513" style="background:#8b4513" <?php if ((isset($bg_color))&&($bg_color=="#8b4513")) echo "selected";?> >Saddle Brown</option>
<option value="#fa8072" style="background:#fa8072" <?php if ((isset($bg_color))&&($bg_color=="#fa8072")) echo "selected";?> >Salmon</option>
<option value="#f4a460" style="background:#f4a460" <?php if ((isset($bg_color))&&($bg_color=="#f4a460")) echo "selected";?> >Sandy Brown</option>
<option value="#2e8b57" style="background:#2e8b57" <?php if ((isset($bg_color))&&($bg_color=="#2e8b57")) echo "selected";?> >Sea Green</option>
<option value="#fff5ee" style="background:#fff5ee" <?php if ((isset($bg_color))&&($bg_color=="#fff5ee")) echo "selected";?> >Sea Shell</option>
<option value="#a0522d" style="background:#a0522d" <?php if ((isset($bg_color))&&($bg_color=="#a0522d")) echo "selected";?> >Sienna</option>
<option value="#c0c0c0" style="background:#c0c0c0" <?php if ((isset($bg_color))&&($bg_color=="#c0c0c0")) echo "selected";?> >Silver</option>
<option value="#87ceeb" style="background:#87ceeb" <?php if ((isset($bg_color))&&($bg_color=="#87ceeb")) echo "selected";?> >SkyBlue</option>
<option value="#6a5acd" style="background:#6a5acd" <?php if ((isset($bg_color))&&($bg_color=="#6a5acd")) echo "selected";?> >Slate Blue</option>
<option value="#708090" style="background:#708090" <?php if ((isset($bg_color))&&($bg_color=="#708090")) echo "selected";?> >Slate Gray</option>
<option value="#fffafa" style="background:#fffafa" <?php if ((isset($bg_color))&&($bg_color=="#fffafa")) echo "selected";?> >Snow</option>
<option value="#00ff7f" style="background:#00ff7f" <?php if ((isset($bg_color))&&($bg_color=="#00ff7f")) echo "selected";?> >Spring Green</option>
<option value="#4682b4" style="background:#4682b4" <?php if ((isset($bg_color))&&($bg_color=="#4682b4")) echo "selected";?> >Steel Blue</option>
<option value="#d2b48c" style="background:#d2b48c" <?php if ((isset($bg_color))&&($bg_color=="#d2b48c")) echo "selected";?> >Tan</option>
<option value="#008080" style="background:#008080" <?php if ((isset($bg_color))&&($bg_color=="#008080")) echo "selected";?> >Teal</option>
<option value="#d8bfd8" style="background:#d8bfd8" <?php if ((isset($bg_color))&&($bg_color=="#d8bfd8")) echo "selected";?> >Thistle</option>
<option value="#ff6347" style="background:#ff6347" <?php if ((isset($bg_color))&&($bg_color=="#ff6347")) echo "selected";?> >Tomato</option>
<option value="#40e0d0" style="background:#40e0d0" <?php if ((isset($bg_color))&&($bg_color=="#40e0d0")) echo "selected";?> >Turquoise</option>
<option value="#ee82ee" style="background:#ee82ee" <?php if ((isset($bg_color))&&($bg_color=="#ee82ee")) echo "selected";?> >Violet</option>
<option value="#f5deb3" style="background:#f5deb3" <?php if ((isset($bg_color))&&($bg_color=="#f5deb3")) echo "selected";?> >Wheat</option>
<option value="#ffffff" style="background:#ffffff" <?php if ((isset($bg_color))&&($bg_color=="#ffffff")) echo "selected";?> >White</option>
<option value="#f5f5f5" style="background:#f5f5f5" <?php if ((isset($bg_color))&&($bg_color=="#f5f5f5")) echo "selected";?> >White Smoke</option>
<option value="#ffff00" style="background:#ffff00" <?php if ((isset($bg_color))&&($bg_color=="#ffff00")) echo "selected";?> >Yellow</option>
<option value="#9acd32" style="background:#9acd32" <?php if ((isset($bg_color))&&($bg_color=="#9acd32")) echo "selected";?> >Yellow Green</option>
</select> 
</div>






















<div style="width:25%;float:left;"> 
Foreground color:<select name="fg_color" id="fg_color"> 
<option value="#fafafa" style="background:#fafafa" <?php if ((isset($fg_color))&&($fg_color=="#fafafa")) echo "selected"; if (!isset($fg_color)) echo "selected";?> >Default</option>
<option value="#f0f8ff" style="background:#f0f8ff" <?php if ((isset($fg_color))&&($fg_color=="#f0f8ff")) echo "selected";?> >Alice Blue</option>
<option value="#faebd7" style="background:#faebd7" <?php if ((isset($fg_color))&&($fg_color=="#faebd7")) echo "selected";?> >Antique White</option>
<option value="#00ffff" style="background:#00ffff" <?php if ((isset($fg_color))&&($fg_color=="#00ffff")) echo "selected";?> >Aqua</option>
<option value="#7fffd4" style="background:#7fffd4" <?php if ((isset($fg_color))&&($fg_color=="#7fffd4")) echo "selected";?> >Aquamarine</option>
<option value="#f0ffff" style="background:#f0ffff" <?php if ((isset($fg_color))&&($fg_color=="#f0ffff")) echo "selected";?> >Azure</option>
<option value="#f5f5dc" style="background:#f5f5dc" <?php if ((isset($fg_color))&&($fg_color=="#f5f5dc")) echo "selected";?> >Beige</option>
<option value="#ffe4c4" style="background:#ffe4c4" <?php if ((isset($fg_color))&&($fg_color=="#ffe4c4")) echo "selected";?> >Bisque</option>
<option value="#000000" style="background:#000000" <?php if ((isset($fg_color))&&($fg_color=="#000000")) echo "selected";?> >Black</option>
<option value="#ffebcd" style="background:#ffebcd" <?php if ((isset($fg_color))&&($fg_color=="#ffebcd")) echo "selected";?> >Blanched Almond</option>
<option value="#0000ff" style="background:#0000ff" <?php if ((isset($fg_color))&&($fg_color=="#0000ff")) echo "selected";?> >Blue</option>
<option value="#8a2be2" style="background:#8a2be2" <?php if ((isset($fg_color))&&($fg_color=="#8a2be2")) echo "selected";?> >Blue Violet</option>
<option value="#a52a2a" style="background:#a52a2a" <?php if ((isset($fg_color))&&($fg_color=="#a52a2a")) echo "selected";?> >Brown</option>
<option value="#deb887" style="background:#deb887" <?php if ((isset($fg_color))&&($fg_color=="#deb887")) echo "selected";?> >Burly Wood</option>
<option value="#5f9ea0" style="background:#5f9ea0" <?php if ((isset($fg_color))&&($fg_color=="#5f9ea0")) echo "selected";?> >Cadet Blue</option>
<option value="#7fff00" style="background:#7fff00" <?php if ((isset($fg_color))&&($fg_color=="#7fff00")) echo "selected";?> >Chartreuse</option>
<option value="#d2691e" style="background:#d2691e" <?php if ((isset($fg_color))&&($fg_color=="#d2691e")) echo "selected";?> >Chocolate</option>
<option value="#ff7f50" style="background:#ff7f50" <?php if ((isset($fg_color))&&($fg_color=="#ff7f50")) echo "selected";?> >Coral</option>
<option value="#6495ed" style="background:#6495ed" <?php if ((isset($fg_color))&&($fg_color=="#6495ed")) echo "selected";?> >Cornflower Blue</option>
<option value="#fff8dc" style="background:#fff8dc" <?php if ((isset($fg_color))&&($fg_color=="#fff8dc")) echo "selected";?> >Cornsilk</option>
<option value="#dc143c" style="background:#dc143c" <?php if ((isset($fg_color))&&($fg_color=="#dc143c")) echo "selected";?> >Crimson</option>
<option value="#00ffff" style="background:#00ffff" <?php if ((isset($fg_color))&&($fg_color=="#00ffff")) echo "selected";?> >Cyan</option>
<option value="#00008b" style="background:#00008b" <?php if ((isset($fg_color))&&($fg_color=="#00008b")) echo "selected";?> >Dark Blue</option>
<option value="#008b8b" style="background:#008b8b" <?php if ((isset($fg_color))&&($fg_color=="#008b8b")) echo "selected";?> >Dark Cyan</option>
<option value="#b8860b" style="background:#b8860b" <?php if ((isset($fg_color))&&($fg_color=="#b8860b")) echo "selected";?> >Dark Golden Rod</option>
<option value="#a9a9a9" style="background:#a9a9a9" <?php if ((isset($fg_color))&&($fg_color=="#a9a9a9")) echo "selected";?> >Dark Gray</option>
<option value="#006400" style="background:#006400" <?php if ((isset($fg_color))&&($fg_color=="#006400")) echo "selected";?> >Dark Green</option>
<option value="#bdb76b" style="background:#bdb76b" <?php if ((isset($fg_color))&&($fg_color=="#bdb76b")) echo "selected";?> >Dark Khaki</option>
<option value="#8b008b" style="background:#8b008b" <?php if ((isset($fg_color))&&($fg_color=="#8b008b")) echo "selected";?> >Dark Magenta</option>
<option value="#556b2f" style="background:#556b2f" <?php if ((isset($fg_color))&&($fg_color=="#556b2f")) echo "selected";?> >Dark Olive Green</option>
<option value="#ff8c00" style="background:#ff8c00" <?php if ((isset($fg_color))&&($fg_color=="#ff8c00")) echo "selected";?> >Dark Orange</option>
<option value="#9932cc" style="background:#9932cc" <?php if ((isset($fg_color))&&($fg_color=="#9932cc")) echo "selected";?> >Dark Orchid</option>
<option value="#8b0000" style="background:#8b0000" <?php if ((isset($fg_color))&&($fg_color=="#8b0000")) echo "selected";?> >Dark Red</option>
<option value="#e9967a" style="background:#e9967a" <?php if ((isset($fg_color))&&($fg_color=="#e9967a")) echo "selected";?> >Dark Salmon</option>
<option value="#8fbc8f" style="background:#8fbc8f" <?php if ((isset($fg_color))&&($fg_color=="#8fbc8f")) echo "selected";?> >Dark SeaGreen</option>
<option value="#483d8b" style="background:#483d8b" <?php if ((isset($fg_color))&&($fg_color=="#483d8b")) echo "selected";?> >Dark SlateBlue</option>
<option value="#2f4f4f" style="background:#2f4f4f" <?php if ((isset($fg_color))&&($fg_color=="#2f4f4f")) echo "selected";?> >Dark SlateGray</option>
<option value="#00ced1" style="background:#00ced1" <?php if ((isset($fg_color))&&($fg_color=="#00ced1")) echo "selected";?> >Dark Turquoise</option>
<option value="#9400d3" style="background:#9400d3" <?php if ((isset($fg_color))&&($fg_color=="#9400d3")) echo "selected";?> >Dark Violet</option>
<option value="#ff1493" style="background:#ff1493" <?php if ((isset($fg_color))&&($fg_color=="#ff1493")) echo "selected";?> >DeepPink</option>
<option value="#00bfff" style="background:#00bfff" <?php if ((isset($fg_color))&&($fg_color=="#00bfff")) echo "selected";?> >Deep Sky Blue</option>
<option value="#696969" style="background:#696969" <?php if ((isset($fg_color))&&($fg_color=="#696969")) echo "selected";?> >Dim Gray</option>
<option value="#1e90ff" style="background:#1e90ff" <?php if ((isset($fg_color))&&($fg_color=="#1e90ff")) echo "selected";?> >Dodger Blue</option>
<option value="#b22222" style="background:#b22222" <?php if ((isset($fg_color))&&($fg_color=="#b22222")) echo "selected";?> >Fire Brick</option>
<option value="#fffaf0" style="background:#fffaf0" <?php if ((isset($fg_color))&&($fg_color=="#fffaf0")) echo "selected";?> >Floral White</option>
<option value="#228b22" style="background:#228b22" <?php if ((isset($fg_color))&&($fg_color=="#228b22")) echo "selected";?> >Forest Green</option>
<option value="#ff00ff" style="background:#ff00ff" <?php if ((isset($fg_color))&&($fg_color=="#ff00ff")) echo "selected";?> >Fuchsia</option>
<option value="#dcdcdc" style="background:#dcdcdc" <?php if ((isset($fg_color))&&($fg_color=="#dcdcdc")) echo "selected";?> >Gainsboro</option>
<option value="#f8f8ff" style="background:#f8f8ff" <?php if ((isset($fg_color))&&($fg_color=="#f8f8ff")) echo "selected";?> >Ghost White</option>
<option value="#ffd700" style="background:#ffd700" <?php if ((isset($fg_color))&&($fg_color=="#ffd700")) echo "selected";?> >Gold</option>
<option value="#daa520" style="background:#daa520" <?php if ((isset($fg_color))&&($fg_color=="#daa520")) echo "selected";?> >Golden Rod</option>
<option value="#808080" style="background:#808080" <?php if ((isset($fg_color))&&($fg_color=="#808080")) echo "selected";?> >Gray</option>
<option value="#008000" style="background:#008000" <?php if ((isset($fg_color))&&($fg_color=="#008000")) echo "selected";?> >Green</option>
<option value="#adff2f" style="background:#adff2f" <?php if ((isset($fg_color))&&($fg_color=="#adff2f")) echo "selected";?> >Green Yellow</option>
<option value="#f0fff0" style="background:#f0fff0" <?php if ((isset($fg_color))&&($fg_color=="#f0fff0")) echo "selected";?> >Honey Dew</option>
<option value="#ff69b4" style="background:#ff69b4" <?php if ((isset($fg_color))&&($fg_color=="#ff69b4")) echo "selected";?> >Hot Pink</option>
<option value="#cd5c5c" style="background:#cd5c5c" <?php if ((isset($fg_color))&&($fg_color=="#cd5c5c")) echo "selected";?> >Indian Red</option>
<option value="#4b0082" style="background:#4b0082" <?php if ((isset($fg_color))&&($fg_color=="#4b0082")) echo "selected";?> >Indigo</option>
<option value="#fffff0" style="background:#fffff0" <?php if ((isset($fg_color))&&($fg_color=="#fffff0")) echo "selected";?> >Ivory</option>
<option value="#f0e68c" style="background:#f0e68c" <?php if ((isset($fg_color))&&($fg_color=="#f0e68c")) echo "selected";?> >Khaki</option>
<option value="#e6e6fa" style="background:#e6e6fa" <?php if ((isset($fg_color))&&($fg_color=="#e6e6fa")) echo "selected";?> >Lavender</option>
<option value="#fff0f5" style="background:#fff0f5" <?php if ((isset($fg_color))&&($fg_color=="#fff0f5")) echo "selected";?> >Lavender Blush</option>
<option value="#7cfc00" style="background:#7cfc00" <?php if ((isset($fg_color))&&($fg_color=="#7cfc00")) echo "selected";?> >Lawn Green</option>
<option value="#fffacd" style="background:#fffacd" <?php if ((isset($fg_color))&&($fg_color=="#fffacd")) echo "selected";?> >Lemon Chiffon</option>
<option value="#add8e6" style="background:#add8e6" <?php if ((isset($fg_color))&&($fg_color=="#add8e6")) echo "selected";?> >Light Blue</option>
<option value="#f08080" style="background:#f08080" <?php if ((isset($fg_color))&&($fg_color=="#f08080")) echo "selected";?> >Light Coral</option>
<option value="#e0ffff" style="background:#e0ffff" <?php if ((isset($fg_color))&&($fg_color=="#e0ffff")) echo "selected";?> >Light Cyan</option>
<option value="#fafad2" style="background:#fafad2" <?php if ((isset($fg_color))&&($fg_color=="#fafad2")) echo "selected";?> >Light Golden Rod Yellow</option>
<option value="#d3d3d3" style="background:#d3d3d3" <?php if ((isset($fg_color))&&($fg_color=="#d3d3d3")) echo "selected";?> >Light Gray</option>
<option value="#90ee90" style="background:#90ee90" <?php if ((isset($fg_color))&&($fg_color=="#90ee90")) echo "selected";?> >Light Green</option>
<option value="#ffb6c1" style="background:#ffb6c1" <?php if ((isset($fg_color))&&($fg_color=="#ffb6c1")) echo "selected";?> >Light Pink</option>
<option value="#ffa07a" style="background:#ffa07a" <?php if ((isset($fg_color))&&($fg_color=="#ffa07a")) echo "selected";?> >Light Salmon</option>
<option value="#20b2aa" style="background:#20b2aa" <?php if ((isset($fg_color))&&($fg_color=="#20b2aa")) echo "selected";?> >Light SeaGreen</option>
<option value="#87cefa" style="background:#87cefa" <?php if ((isset($fg_color))&&($fg_color=="#87cefa")) echo "selected";?> >Light Sky Blue</option>
<option value="#778899" style="background:#778899" <?php if ((isset($fg_color))&&($fg_color=="#778899")) echo "selected";?> >Light Slate Gray</option>
<option value="#b0c4de" style="background:#b0c4de" <?php if ((isset($fg_color))&&($fg_color=="#b0c4de")) echo "selected";?> >Light Steel Blue</option>
<option value="#ffffe0" style="background:#ffffe0" <?php if ((isset($fg_color))&&($fg_color=="#ffffe0")) echo "selected";?> >Light Yellow</option>
<option value="#00ff00" style="background:#00ff00" <?php if ((isset($fg_color))&&($fg_color=="#00ff00")) echo "selected";?> >Lime</option>
<option value="#32cd32" style="background:#32cd32" <?php if ((isset($fg_color))&&($fg_color=="#32cd32")) echo "selected";?> >LimeGreen</option>
<option value="#faf0e6" style="background:#faf0e6" <?php if ((isset($fg_color))&&($fg_color=="#faf0e6")) echo "selected";?> >Linen</option>
<option value="#ff00ff" style="background:#ff00ff" <?php if ((isset($fg_color))&&($fg_color=="#ff00ff")) echo "selected";?> >Magenta</option>
<option value="#800000" style="background:#800000" <?php if ((isset($fg_color))&&($fg_color=="#800000")) echo "selected";?> >Maroon</option>
<option value="#66cdaa" style="background:#66cdaa" <?php if ((isset($fg_color))&&($fg_color=="#66cdaa")) echo "selected";?> >Medium Aqua Marine</option>
<option value="#0000cd" style="background:#0000cd" <?php if ((isset($fg_color))&&($fg_color=="#0000cd")) echo "selected";?> >Medium Blue</option>
<option value="#ba55d3" style="background:#ba55d3" <?php if ((isset($fg_color))&&($fg_color=="#ba55d3")) echo "selected";?> >Medium Orchid</option>
<option value="#9370d8" style="background:#9370d8" <?php if ((isset($fg_color))&&($fg_color=="#9370d8")) echo "selected";?> >Medium Purple</option>
<option value="#3cb371" style="background:#3cb371" <?php if ((isset($fg_color))&&($fg_color=="#3cb371")) echo "selected";?> >Medium Sea Green</option>
<option value="#7b68ee" style="background:#7b68ee" <?php if ((isset($fg_color))&&($fg_color=="#7b68ee")) echo "selected";?> >Medium Slate Blue</option>
<option value="#00fa9a" style="background:#00fa9a" <?php if ((isset($fg_color))&&($fg_color=="#00fa9a")) echo "selected";?> >Medium Spring Green</option>
<option value="#48d1cc" style="background:#48d1cc" <?php if ((isset($fg_color))&&($fg_color=="#48d1cc")) echo "selected";?> >Medium Turquoise</option>
<option value="#c71585" style="background:#c71585" <?php if ((isset($fg_color))&&($fg_color=="#c71585")) echo "selected";?> >Medium Violet Red</option>
<option value="#191970" style="background:#191970" <?php if ((isset($fg_color))&&($fg_color=="#191970")) echo "selected";?> >Midnight Blue</option>
<option value="#f5fffa" style="background:#f5fffa" <?php if ((isset($fg_color))&&($fg_color=="#f5fffa")) echo "selected";?> >Mint Cream</option>
<option value="#ffe4e1" style="background:#ffe4e1" <?php if ((isset($fg_color))&&($fg_color=="#ffe4e1")) echo "selected";?> >Misty Rose</option>
<option value="#ffe4b5" style="background:#ffe4b5" <?php if ((isset($fg_color))&&($fg_color=="#ffe4b5")) echo "selected";?> >Moccasin</option>
<option value="#ffdead" style="background:#ffdead" <?php if ((isset($fg_color))&&($fg_color=="#ffdead")) echo "selected";?> >Navajo White</option>
<option value="#000080" style="background:#000080" <?php if ((isset($fg_color))&&($fg_color=="#000080")) echo "selected";?> >Navy</option>
<option value="#fdf5e6" style="background:#fdf5e6" <?php if ((isset($fg_color))&&($fg_color=="#fdf5e6")) echo "selected";?> >Old Lace</option>
<option value="#808000" style="background:#808000" <?php if ((isset($fg_color))&&($fg_color=="#808000")) echo "selected";?> >Olive</option>
<option value="#6b8e23" style="background:#6b8e23" <?php if ((isset($fg_color))&&($fg_color=="#6b8e23")) echo "selected";?> >Olive Drab</option>
<option value="#ffa500" style="background:#ffa500" <?php if ((isset($fg_color))&&($fg_color=="#ffa500")) echo "selected";?> >Orange</option>
<option value="#ff4500" style="background:#ff4500" <?php if ((isset($fg_color))&&($fg_color=="#ff4500")) echo "selected";?> >Orange Red</option>
<option value="#eee8aa" style="background:#eee8aa" <?php if ((isset($fg_color))&&($fg_color=="#eee8aa")) echo "selected";?> >Pale Golden Rod</option>
<option value="#98fb98" style="background:#98fb98" <?php if ((isset($fg_color))&&($fg_color=="#98fb98")) echo "selected";?> >Pale Green</option>
<option value="#afeeee" style="background:#afeeee" <?php if ((isset($fg_color))&&($fg_color=="#afeeee")) echo "selected";?> >Pale Turquoise</option>
<option value="#d87093" style="background:#d87093" <?php if ((isset($fg_color))&&($fg_color=="#d87093")) echo "selected";?> >Pale Violet Red</option>
<option value="#ffefd5" style="background:#ffefd5" <?php if ((isset($fg_color))&&($fg_color=="#ffefd5")) echo "selected";?> >Papaya Whip</option>
<option value="#ffdab9" style="background:#ffdab9" <?php if ((isset($fg_color))&&($fg_color=="#ffdab9")) echo "selected";?> >Peach Puff</option>
<option value="#cd853f" style="background:#cd853f" <?php if ((isset($fg_color))&&($fg_color=="#cd853f")) echo "selected";?> >Peru</option>
<option value="#ffc0cb" style="background:#ffc0cb" <?php if ((isset($fg_color))&&($fg_color=="#ffc0cb")) echo "selected";?> >Pink</option>
<option value="#dda0dd" style="background:#dda0dd" <?php if ((isset($fg_color))&&($fg_color=="#dda0dd")) echo "selected";?> >Plum</option>
<option value="#b0e0e6" style="background:#b0e0e6" <?php if ((isset($fg_color))&&($fg_color=="#b0e0e6")) echo "selected";?> >Powder Blue</option>
<option value="#800080" style="background:#800080" <?php if ((isset($fg_color))&&($fg_color=="#800080")) echo "selected";?> >Purple</option>
<option value="#ff0000" style="background:#ff0000" <?php if ((isset($fg_color))&&($fg_color=="#ff0000")) echo "selected";?> >Red</option>
<option value="#bc8f8f" style="background:#bc8f8f" <?php if ((isset($fg_color))&&($fg_color=="#bc8f8f")) echo "selected";?> >Rosy Brown</option>
<option value="#4169e1" style="background:#4169e1" <?php if ((isset($fg_color))&&($fg_color=="#4169e1")) echo "selected";?> >Royal Blue</option>
<option value="#8b4513" style="background:#8b4513" <?php if ((isset($fg_color))&&($fg_color=="#8b4513")) echo "selected";?> >Saddle Brown</option>
<option value="#fa8072" style="background:#fa8072" <?php if ((isset($fg_color))&&($fg_color=="#fa8072")) echo "selected";?> >Salmon</option>
<option value="#f4a460" style="background:#f4a460" <?php if ((isset($fg_color))&&($fg_color=="#f4a460")) echo "selected";?> >Sandy Brown</option>
<option value="#2e8b57" style="background:#2e8b57" <?php if ((isset($fg_color))&&($fg_color=="#2e8b57")) echo "selected";?> >Sea Green</option>
<option value="#fff5ee" style="background:#fff5ee" <?php if ((isset($fg_color))&&($fg_color=="#fff5ee")) echo "selected";?> >Sea Shell</option>
<option value="#a0522d" style="background:#a0522d" <?php if ((isset($fg_color))&&($fg_color=="#a0522d")) echo "selected";?> >Sienna</option>
<option value="#c0c0c0" style="background:#c0c0c0" <?php if ((isset($fg_color))&&($fg_color=="#c0c0c0")) echo "selected";?> >Silver</option>
<option value="#87ceeb" style="background:#87ceeb" <?php if ((isset($fg_color))&&($fg_color=="#87ceeb")) echo "selected";?> >SkyBlue</option>
<option value="#6a5acd" style="background:#6a5acd" <?php if ((isset($fg_color))&&($fg_color=="#6a5acd")) echo "selected";?> >Slate Blue</option>
<option value="#708090" style="background:#708090" <?php if ((isset($fg_color))&&($fg_color=="#708090")) echo "selected";?> >Slate Gray</option>
<option value="#fffafa" style="background:#fffafa" <?php if ((isset($fg_color))&&($fg_color=="#fffafa")) echo "selected";?> >Snow</option>
<option value="#00ff7f" style="background:#00ff7f" <?php if ((isset($fg_color))&&($fg_color=="#00ff7f")) echo "selected";?> >Spring Green</option>
<option value="#4682b4" style="background:#4682b4" <?php if ((isset($fg_color))&&($fg_color=="#4682b4")) echo "selected";?> >Steel Blue</option>
<option value="#d2b48c" style="background:#d2b48c" <?php if ((isset($fg_color))&&($fg_color=="#d2b48c")) echo "selected";?> >Tan</option>
<option value="#008080" style="background:#008080" <?php if ((isset($fg_color))&&($fg_color=="#008080")) echo "selected";?> >Teal</option>
<option value="#d8bfd8" style="background:#d8bfd8" <?php if ((isset($fg_color))&&($fg_color=="#d8bfd8")) echo "selected";?> >Thistle</option>
<option value="#ff6347" style="background:#ff6347" <?php if ((isset($fg_color))&&($fg_color=="#ff6347")) echo "selected";?> >Tomato</option>
<option value="#40e0d0" style="background:#40e0d0" <?php if ((isset($fg_color))&&($fg_color=="#40e0d0")) echo "selected";?> >Turquoise</option>
<option value="#ee82ee" style="background:#ee82ee" <?php if ((isset($fg_color))&&($fg_color=="#ee82ee")) echo "selected";?> >Violet</option>
<option value="#f5deb3" style="background:#f5deb3" <?php if ((isset($fg_color))&&($fg_color=="#f5deb3")) echo "selected";?> >Wheat</option>
<option value="#ffffff" style="background:#ffffff" <?php if ((isset($fg_color))&&($fg_color=="#ffffff")) echo "selected";?> >White</option>
<option value="#f5f5f5" style="background:#f5f5f5" <?php if ((isset($fg_color))&&($fg_color=="#f5f5f5")) echo "selected";?> >White Smoke</option>
<option value="#ffff00" style="background:#ffff00" <?php if ((isset($fg_color))&&($fg_color=="#ffff00")) echo "selected";?> >Yellow</option>
<option value="#9acd32" style="background:#9acd32" <?php if ((isset($fg_color))&&($fg_color=="#9acd32")) echo "selected";?> >Yellow Green</option>
</select> 
</div>













<div style="width:25%;float:left;"> 
Font color:<select name="ft_color" id="ft_color"> 
<option value="#666666"              style="background:#666666" <?php if ((isset($ft_color))&&($ft_color=="#666666"))              echo "selected"; if (!isset($ft_color)) echo "selected";?> >Default</option>
<option value="aliceblue"            style="background:#f0f8ff" <?php if ((isset($ft_color))&&($ft_color=="aliceblue"))            echo "selected";?> >Alice Blue</option>
<option value="antiquewhite"         style="background:#faebd7" <?php if ((isset($ft_color))&&($ft_color=="antiquewhite"))         echo "selected";?> >Antique White</option>
<option value="#00ffff"              style="background:#00ffff" <?php if ((isset($ft_color))&&($ft_color=="#00ffff"))              echo "selected";?> >Aqua</option>
<option value="#7fffd4"              style="background:#7fffd4" <?php if ((isset($ft_color))&&($ft_color=="#7fffd4"))              echo "selected";?> >Aquamarine</option>
<option value="beige"                style="background:#f5f5dc" <?php if ((isset($ft_color))&&($ft_color=="beige"))                echo "selected";?> >Beige</option>
<option value="bisque"               style="background:#ffe4c4" <?php if ((isset($ft_color))&&($ft_color=="bisque"))               echo "selected";?> >Bisque</option>
<option value="#000000"              style="background:#000000" <?php if ((isset($ft_color))&&($ft_color=="#000000"))              echo "selected";?> >Black</option>
<option value="blanchedalmond"       style="background:#ffebcd" <?php if ((isset($ft_color))&&($ft_color=="blanchedalmond"))       echo "selected";?> >Blanched Almond</option>
<option value="#0000ff"              style="background:#0000ff" <?php if ((isset($ft_color))&&($ft_color=="#0000ff"))              echo "selected";?> >Blue</option>
<option value="#8a2be2"              style="background:#8a2be2" <?php if ((isset($ft_color))&&($ft_color=="#8a2be2"))              echo "selected";?> >Blue Violet</option>
<option value="#a52a2a"              style="background:#a52a2a" <?php if ((isset($ft_color))&&($ft_color=="#a52a2a"))              echo "selected";?> >Brown</option>
<option value="burlywood"            style="background:#deb887" <?php if ((isset($ft_color))&&($ft_color=="burlywood"))            echo "selected";?> >Burly Wood</option>
<option value="#5f9ea0"              style="background:#5f9ea0" <?php if ((isset($ft_color))&&($ft_color=="#5f9ea0"))              echo "selected";?> >Cadet Blue</option>
<option value="#7fff00"              style="background:#7fff00" <?php if ((isset($ft_color))&&($ft_color=="#7fff00"))              echo "selected";?> >Chartreuse</option>
<option value="chocolate"            style="background:#d2691e" <?php if ((isset($ft_color))&&($ft_color=="chocolate"))            echo "selected";?> >Chocolate</option>
<option value="coral"                style="background:#ff7f50" <?php if ((isset($ft_color))&&($ft_color=="coral"))                echo "selected";?> >Coral</option>
<option value="#6495ed"              style="background:#6495ed" <?php if ((isset($ft_color))&&($ft_color=="#6495ed"))              echo "selected";?> >Cornflower Blue</option>
<option value="cornsilk"             style="background:#fff8dc" <?php if ((isset($ft_color))&&($ft_color=="cornsilk"))             echo "selected";?> >Cornsilk</option>
<option value="crimson"              style="background:#dc143c" <?php if ((isset($ft_color))&&($ft_color=="crimson"))              echo "selected";?> >Crimson</option>
<option value="#00ffff"              style="background:#00ffff" <?php if ((isset($ft_color))&&($ft_color=="#00ffff"))              echo "selected";?> >Cyan</option>
<option value="#00008b"              style="background:#00008b" <?php if ((isset($ft_color))&&($ft_color=="#00008b"))              echo "selected";?> >Dark Blue</option>
<option value="#008b8b"              style="background:#008b8b" <?php if ((isset($ft_color))&&($ft_color=="#008b8b"))              echo "selected";?> >Dark Cyan</option>
<option value="#b8860b"              style="background:#b8860b" <?php if ((isset($ft_color))&&($ft_color=="#b8860b"))              echo "selected";?> >Dark Golden Rod</option>
<option value="#a9a9a9"              style="background:#a9a9a9" <?php if ((isset($ft_color))&&($ft_color=="#a9a9a9"))              echo "selected";?> >Dark Gray</option>
<option value="#006400"              style="background:#006400" <?php if ((isset($ft_color))&&($ft_color=="#006400"))              echo "selected";?> >Dark Green</option>
<option value="#bdb76b"              style="background:#bdb76b" <?php if ((isset($ft_color))&&($ft_color=="#bdb76b"))              echo "selected";?> >Dark Khaki</option>
<option value="#8b008b"              style="background:#8b008b" <?php if ((isset($ft_color))&&($ft_color=="#8b008b"))              echo "selected";?> >Dark Magenta</option>
<option value="#556b2f"              style="background:#556b2f" <?php if ((isset($ft_color))&&($ft_color=="#556b2f"))              echo "selected";?> >Dark Olive Green</option>
<option value="#9932cc"              style="background:#9932cc" <?php if ((isset($ft_color))&&($ft_color=="#9932cc"))              echo "selected";?> >Dark Orchid</option>
<option value="#8b0000"              style="background:#8b0000" <?php if ((isset($ft_color))&&($ft_color=="#8b0000"))              echo "selected";?> >Dark Red</option>
<option value="#8fbc8f"              style="background:#8fbc8f" <?php if ((isset($ft_color))&&($ft_color=="#8fbc8f"))              echo "selected";?> >Dark SeaGreen</option>
<option value="#483d8b"              style="background:#483d8b" <?php if ((isset($ft_color))&&($ft_color=="#483d8b"))              echo "selected";?> >Dark SlateBlue</option>
<option value="#2f4f4f"              style="background:#2f4f4f" <?php if ((isset($ft_color))&&($ft_color=="#2f4f4f"))              echo "selected";?> >Dark SlateGray</option>
<option value="#00ced1"              style="background:#00ced1" <?php if ((isset($ft_color))&&($ft_color=="#00ced1"))              echo "selected";?> >Dark Turquoise</option>
<option value="#9400d3"              style="background:#9400d3" <?php if ((isset($ft_color))&&($ft_color=="#9400d3"))              echo "selected";?> >Dark Violet</option>
<option value="#00bfff"              style="background:#00bfff" <?php if ((isset($ft_color))&&($ft_color=="#00bfff"))              echo "selected";?> >Deep Sky Blue</option>
<option value="#696969"              style="background:#696969" <?php if ((isset($ft_color))&&($ft_color=="#696969"))              echo "selected";?> >Dim Gray</option>
<option value="#1e90ff"              style="background:#1e90ff" <?php if ((isset($ft_color))&&($ft_color=="#1e90ff"))              echo "selected";?> >Dodger Blue</option>
<option value="#b22222"              style="background:#b22222" <?php if ((isset($ft_color))&&($ft_color=="#b22222"))              echo "selected";?> >Fire Brick</option>
<option value="#228b22"              style="background:#228b22" <?php if ((isset($ft_color))&&($ft_color=="#228b22"))              echo "selected";?> >Forest Green</option>
<option value="gainsboro"            style="background:#dcdcdc" <?php if ((isset($ft_color))&&($ft_color=="gainsboro"))            echo "selected";?> >Gainsboro</option>
<option value="gold"                 style="background:#ffd700" <?php if ((isset($ft_color))&&($ft_color=="gold"))                 echo "selected";?> >Gold</option>
<option value="goldenrod"            style="background:#daa520" <?php if ((isset($ft_color))&&($ft_color=="goldenrod"))            echo "selected";?> >Golden Rod</option>
<option value="#808080"              style="background:#808080" <?php if ((isset($ft_color))&&($ft_color=="#808080"))              echo "selected";?> >Gray</option>
<option value="#008000"              style="background:#008000" <?php if ((isset($ft_color))&&($ft_color=="#008000"))              echo "selected";?> >Green</option>
<option value="#adff2f"              style="background:#adff2f" <?php if ((isset($ft_color))&&($ft_color=="#adff2f"))              echo "selected";?> >Green Yellow</option>
<option value="hotpink"              style="background:#ff69b4" <?php if ((isset($ft_color))&&($ft_color=="hotpink"))              echo "selected";?> >Hot Pink</option>
<option value="#cd5c5c"              style="background:#cd5c5c" <?php if ((isset($ft_color))&&($ft_color=="#cd5c5c"))              echo "selected";?> >Indian Red</option>
<option value="#4b0082"              style="background:#4b0082" <?php if ((isset($ft_color))&&($ft_color=="#4b0082"))              echo "selected";?> >Indigo</option>
<option value="khaki"                style="background:#f0e68c" <?php if ((isset($ft_color))&&($ft_color=="khaki"))                echo "selected";?> >Khaki</option>
<option value="lavender"             style="background:#e6e6fa" <?php if ((isset($ft_color))&&($ft_color=="lavender"))             echo "selected";?> >Lavender</option>
<option value="lavenderblush"        style="background:#fff0f5" <?php if ((isset($ft_color))&&($ft_color=="lavenderblush"))        echo "selected";?> >Lavender Blush</option>
<option value="#7cfc00"              style="background:#7cfc00" <?php if ((isset($ft_color))&&($ft_color=="#7cfc00"))              echo "selected";?> >Lawn Green</option>
<option value="lemonchiffon"         style="background:#fffacd" <?php if ((isset($ft_color))&&($ft_color=="lemonchiffon"))         echo "selected";?> >Lemon Chiffon</option>
<option value="#add8e6"              style="background:#add8e6" <?php if ((isset($ft_color))&&($ft_color=="#add8e6"))              echo "selected";?> >Light Blue</option>
<option value="lightcoral"           style="background:#f08080" <?php if ((isset($ft_color))&&($ft_color=="lightcoral"))           echo "selected";?> >Light Coral</option>
<option value="lightcyan"            style="background:#e0ffff" <?php if ((isset($ft_color))&&($ft_color=="lightcyan"))            echo "selected";?> >Light Cyan</option>
<option value="lightgoldenrodyellow" style="background:#fafad2" <?php if ((isset($ft_color))&&($ft_color=="lightgoldenrodyellow")) echo "selected";?> >Light Golden Rod Yellow</option>
<option value="lightgray"            style="background:#d3d3d3" <?php if ((isset($ft_color))&&($ft_color=="lightgray"))            echo "selected";?> >Light Gray</option>
<option value="#90ee90"              style="background:#90ee90" <?php if ((isset($ft_color))&&($ft_color=="#90ee90"))              echo "selected";?> >Light Green</option>
<option value="lightpink"            style="background:#ffb6c1" <?php if ((isset($ft_color))&&($ft_color=="lightpink"))            echo "selected";?> >Light Pink</option>
<option value="lightsalmon"          style="background:#ffa07a" <?php if ((isset($ft_color))&&($ft_color=="lightsalmon"))          echo "selected";?> >Light Salmon</option>
<option value="#20b2aa"              style="background:#20b2aa" <?php if ((isset($ft_color))&&($ft_color=="#20b2aa"))              echo "selected";?> >Light SeaGreen</option>
<option value="#87cefa"              style="background:#87cefa" <?php if ((isset($ft_color))&&($ft_color=="#87cefa"))              echo "selected";?> >Light Sky Blue</option>
<option value="#778899"              style="background:#778899" <?php if ((isset($ft_color))&&($ft_color=="#778899"))              echo "selected";?> >Light Slate Gray</option>
<option value="#b0c4de"              style="background:#b0c4de" <?php if ((isset($ft_color))&&($ft_color=="#b0c4de"))              echo "selected";?> >Light Steel Blue</option>
<option value="lightyellow"          style="background:#ffffe0" <?php if ((isset($ft_color))&&($ft_color=="lightyellow"))          echo "selected";?> >Light Yellow</option>
<option value="#00ff00"              style="background:#00ff00" <?php if ((isset($ft_color))&&($ft_color=="#00ff00"))              echo "selected";?> >Lime</option>
<option value="#32cd32"              style="background:#32cd32" <?php if ((isset($ft_color))&&($ft_color=="#32cd32"))              echo "selected";?> >LimeGreen</option>
<option value="linen"                style="background:#faf0e6" <?php if ((isset($ft_color))&&($ft_color=="linen"))                echo "selected";?> >Linen</option>
<option value="magenta"              style="background:#ff00ff" <?php if ((isset($ft_color))&&($ft_color=="magenta"))              echo "selected";?> >Magenta</option>
<option value="#800000"              style="background:#800000" <?php if ((isset($ft_color))&&($ft_color=="#800000"))              echo "selected";?> >Maroon</option>
<option value="#66cdaa"              style="background:#66cdaa" <?php if ((isset($ft_color))&&($ft_color=="#66cdaa"))              echo "selected";?> >Medium Aqua Marine</option>
<option value="#0000cd"              style="background:#0000cd" <?php if ((isset($ft_color))&&($ft_color=="#0000cd"))              echo "selected";?> >Medium Blue</option>
<option value="#ba55d3"              style="background:#ba55d3" <?php if ((isset($ft_color))&&($ft_color=="#ba55d3"))              echo "selected";?> >Medium Orchid</option>
<option value="#9370d8"              style="background:#9370d8" <?php if ((isset($ft_color))&&($ft_color=="#9370d8"))              echo "selected";?> >Medium Purple</option>
<option value="#3cb371"              style="background:#3cb371" <?php if ((isset($ft_color))&&($ft_color=="#3cb371"))              echo "selected";?> >Medium Sea Green</option>
<option value="#7b68ee"              style="background:#7b68ee" <?php if ((isset($ft_color))&&($ft_color=="#7b68ee"))              echo "selected";?> >Medium Slate Blue</option>
<option value="#00fa9a"              style="background:#00fa9a" <?php if ((isset($ft_color))&&($ft_color=="#00fa9a"))              echo "selected";?> >Medium Spring Green</option>
<option value="#48d1cc"              style="background:#48d1cc" <?php if ((isset($ft_color))&&($ft_color=="#48d1cc"))              echo "selected";?> >Medium Turquoise</option>
<option value="#c71585"              style="background:#c71585" <?php if ((isset($ft_color))&&($ft_color=="#c71585"))              echo "selected";?> >Medium Violet Red</option>
<option value="#191970"              style="background:#191970" <?php if ((isset($ft_color))&&($ft_color=="#191970"))              echo "selected";?> >Midnight Blue</option>
<option value="mintcream"            style="background:#f5fffa" <?php if ((isset($ft_color))&&($ft_color=="mintcream"))            echo "selected";?> >Mint Cream</option>
<option value="mistyrose"            style="background:#ffe4e1" <?php if ((isset($ft_color))&&($ft_color=="mistyrose"))            echo "selected";?> >Misty Rose</option>
<option value="moccasin"             style="background:#ffe4b5" <?php if ((isset($ft_color))&&($ft_color=="moccasin"))             echo "selected";?> >Moccasin</option>
<option value="navajowhite"          style="background:#ffdead" <?php if ((isset($ft_color))&&($ft_color=="navajowhite"))          echo "selected";?> >Navajo White</option>
<option value="#000080"              style="background:#000080" <?php if ((isset($ft_color))&&($ft_color=="#000080"))              echo "selected";?> >Navy</option>
<option value="oldlace"              style="background:#fdf5e6" <?php if ((isset($ft_color))&&($ft_color=="oldlace"))              echo "selected";?> >Old Lace</option>
<option value="#808000"              style="background:#808000" <?php if ((isset($ft_color))&&($ft_color=="#808000"))              echo "selected";?> >Olive</option>
<option value="#6b8e23"              style="background:#6b8e23" <?php if ((isset($ft_color))&&($ft_color=="#6b8e23"))              echo "selected";?> >Olive Drab</option>
<option value="orange"               style="background:#ffa500" <?php if ((isset($ft_color))&&($ft_color=="orange"))               echo "selected";?> >Orange</option>
<option value="orangered"            style="background:#ff4500" <?php if ((isset($ft_color))&&($ft_color=="orangered"))            echo "selected";?> >Orange Red</option>
<option value="orchid"               style="background:#da70d6" <?php if ((isset($ft_color))&&($ft_color=="orchid"))               echo "selected";?> >Orchid</option>
<option value="palegoldenrod"        style="background:#eee8aa" <?php if ((isset($ft_color))&&($ft_color=="palegoldenrod"))        echo "selected";?> >Pale Golden Rod</option>
<option value="#98fb98"              style="background:#98fb98" <?php if ((isset($ft_color))&&($ft_color=="#98fb98"))              echo "selected";?> >Pale Green</option>
<option value="#afeeee"              style="background:#afeeee" <?php if ((isset($ft_color))&&($ft_color=="#afeeee"))              echo "selected";?> >Pale Turquoise</option>
<option value="palevioletred"        style="background:#d87093" <?php if ((isset($ft_color))&&($ft_color=="palevioletred"))        echo "selected";?> >Pale Violet Red</option>
<option value="papayawhip"           style="background:#ffefd5" <?php if ((isset($ft_color))&&($ft_color=="papayawhip"))           echo "selected";?> >Papaya Whip</option>
<option value="peachpuff"            style="background:#ffdab9" <?php if ((isset($ft_color))&&($ft_color=="peachpuff"))            echo "selected";?> >Peach Puff</option>
<option value="#cd853f"              style="background:#cd853f" <?php if ((isset($ft_color))&&($ft_color=="#cd853f"))              echo "selected";?> >Peru</option>
<option value="pink"                 style="background:#ffc0cb" <?php if ((isset($ft_color))&&($ft_color=="pink"))                 echo "selected";?> >Pink</option>
<option value="plum"                 style="background:#dda0dd" <?php if ((isset($ft_color))&&($ft_color=="plum"))                 echo "selected";?> >Plum</option>
<option value="#b0e0e6"              style="background:#b0e0e6" <?php if ((isset($ft_color))&&($ft_color=="#b0e0e6"))              echo "selected";?> >Powder Blue</option>
<option value="#800080"              style="background:#800080" <?php if ((isset($ft_color))&&($ft_color=="#800080"))              echo "selected";?> >Purple</option>
<option value="red"                  style="background:#ff0000" <?php if ((isset($ft_color))&&($ft_color=="red"))                  echo "selected";?> >Red</option>
<option value="#bc8f8f"              style="background:#bc8f8f" <?php if ((isset($ft_color))&&($ft_color=="#bc8f8f"))              echo "selected";?> >Rosy Brown</option>
<option value="#4169e1"              style="background:#4169e1" <?php if ((isset($ft_color))&&($ft_color=="#4169e1"))              echo "selected";?> >Royal Blue</option>
<option value="#8b4513"              style="background:#8b4513" <?php if ((isset($ft_color))&&($ft_color=="#8b4513"))              echo "selected";?> >Saddle Brown</option>
<option value="salmon"               style="background:#fa8072" <?php if ((isset($ft_color))&&($ft_color=="salmon"))               echo "selected";?> >Salmon</option>
<option value="sandybrown"           style="background:#f4a460" <?php if ((isset($ft_color))&&($ft_color=="sandybrown"))           echo "selected";?> >Sandy Brown</option>
<option value="#2e8b57"              style="background:#2e8b57" <?php if ((isset($ft_color))&&($ft_color=="#2e8b57"))              echo "selected";?> >Sea Green</option>
<option value="#a0522d"              style="background:#a0522d" <?php if ((isset($ft_color))&&($ft_color=="#a0522d"))              echo "selected";?> >Sienna</option>
<option value="#c0c0c0"              style="background:#c0c0c0" <?php if ((isset($ft_color))&&($ft_color=="#c0c0c0"))              echo "selected";?> >Silver</option>
<option value="#87ceeb"              style="background:#87ceeb" <?php if ((isset($ft_color))&&($ft_color=="#87ceeb"))              echo "selected";?> >SkyBlue</option>
<option value="#6a5acd"              style="background:#6a5acd" <?php if ((isset($ft_color))&&($ft_color=="#6a5acd"))              echo "selected";?> >Slate Blue</option>
<option value="#708090"              style="background:#708090" <?php if ((isset($ft_color))&&($ft_color=="#708090"))              echo "selected";?> >Slate Gray</option>
<option value="#00ff7f"              style="background:#00ff7f" <?php if ((isset($ft_color))&&($ft_color=="#00ff7f"))              echo "selected";?> >Spring Green</option>
<option value="#4682b4"              style="background:#4682b4" <?php if ((isset($ft_color))&&($ft_color=="#4682b4"))              echo "selected";?> >Steel Blue</option>
<option value="tan"                  style="background:#d2b48c" <?php if ((isset($ft_color))&&($ft_color=="tan"))                  echo "selected";?> >Tan</option>
<option value="#008080"              style="background:#008080" <?php if ((isset($ft_color))&&($ft_color=="#008080"))              echo "selected";?> >Teal</option>
<option value="thistle"              style="background:#d8bfd8" <?php if ((isset($ft_color))&&($ft_color=="thistle"))              echo "selected";?> >Thistle</option>
<option value="tomato"               style="background:#ff6347" <?php if ((isset($ft_color))&&($ft_color=="tomato"))               echo "selected";?> >Tomato</option>
<option value="#40e0d0"              style="background:#40e0d0" <?php if ((isset($ft_color))&&($ft_color=="#40e0d0"))              echo "selected";?> >Turquoise</option>
<option value="violet"               style="background:#ee82ee" <?php if ((isset($ft_color))&&($ft_color=="violet"))               echo "selected";?> >Violet</option>
<option value="wheat"                style="background:#f5deb3" <?php if ((isset($ft_color))&&($ft_color=="wheat"))                echo "selected";?> >Wheat</option>
<option value="yellow"               style="background:#ffff00" <?php if ((isset($ft_color))&&($ft_color=="yellow"))               echo "selected";?> >Yellow</option>
<option value="#9acd32"              style="background:#9acd32" <?php if ((isset($ft_color))&&($ft_color=="#9acd32"))              echo "selected";?> >Yellow Green</option>
</select> 
</div> 
























<div style="width:25%;float:left;"> 
Highlight color:<select name="hl_color" id="hl_color"> 
<option value="crimson"              style="background:#dc143c" <?php if ((isset($hl_color))&&($hl_color=="crimson")) {             echo "selected"; unset($hl_color);} if (!isset($hl_color)) echo "selected";?> >Default</option>
<option value="aliceblue"            style="background:#f0f8ff" <?php if ((isset($hl_color))&&($hl_color=="aliceblue"))            echo "selected";?> >Alice Blue</option>
<option value="antiquewhite"         style="background:#faebd7" <?php if ((isset($hl_color))&&($hl_color=="antiquewhite"))         echo "selected";?> >Antique White</option>
<option value="#00ffff"              style="background:#00ffff" <?php if ((isset($hl_color))&&($hl_color=="#00ffff"))              echo "selected";?> >Aqua</option>
<option value="#7fffd4"              style="background:#7fffd4" <?php if ((isset($hl_color))&&($hl_color=="#7fffd4"))              echo "selected";?> >Aquamarine</option>
<option value="beige"                style="background:#f5f5dc" <?php if ((isset($hl_color))&&($hl_color=="beige"))                echo "selected";?> >Beige</option>
<option value="bisque"               style="background:#ffe4c4" <?php if ((isset($hl_color))&&($hl_color=="bisque"))               echo "selected";?> >Bisque</option>
<option value="#000000"              style="background:#000000" <?php if ((isset($hl_color))&&($hl_color=="#000000"))              echo "selected";?> >Black</option>
<option value="blanchedalmond"       style="background:#ffebcd" <?php if ((isset($hl_color))&&($hl_color=="blanchedalmond"))       echo "selected";?> >Blanched Almond</option>
<option value="#0000ff"              style="background:#0000ff" <?php if ((isset($hl_color))&&($hl_color=="#0000ff"))              echo "selected";?> >Blue</option>
<option value="#8a2be2"              style="background:#8a2be2" <?php if ((isset($hl_color))&&($hl_color=="#8a2be2"))              echo "selected";?> >Blue Violet</option>
<option value="#a52a2a"              style="background:#a52a2a" <?php if ((isset($hl_color))&&($hl_color=="#a52a2a"))              echo "selected";?> >Brown</option>
<option value="burlywood"            style="background:#deb887" <?php if ((isset($hl_color))&&($hl_color=="burlywood"))            echo "selected";?> >Burly Wood</option>
<option value="#5f9ea0"              style="background:#5f9ea0" <?php if ((isset($hl_color))&&($hl_color=="#5f9ea0"))              echo "selected";?> >Cadet Blue</option>
<option value="#7fff00"              style="background:#7fff00" <?php if ((isset($hl_color))&&($hl_color=="#7fff00"))              echo "selected";?> >Chartreuse</option>
<option value="chocolate"            style="background:#d2691e" <?php if ((isset($hl_color))&&($hl_color=="chocolate"))            echo "selected";?> >Chocolate</option>
<option value="coral"                style="background:#ff7f50" <?php if ((isset($hl_color))&&($hl_color=="coral"))                echo "selected";?> >Coral</option>
<option value="#6495ed"              style="background:#6495ed" <?php if ((isset($hl_color))&&($hl_color=="#6495ed"))              echo "selected";?> >Cornflower Blue</option>
<option value="cornsilk"             style="background:#fff8dc" <?php if ((isset($hl_color))&&($hl_color=="cornsilk"))             echo "selected";?> >Cornsilk</option>
<option value="crimson"              style="background:#dc143c" <?php if ((isset($hl_color))&&($hl_color=="crimson"))              echo "selected";?> >Crimson</option>
<option value="#00ffff"              style="background:#00ffff" <?php if ((isset($hl_color))&&($hl_color=="#00ffff"))              echo "selected";?> >Cyan</option>
<option value="#00008b"              style="background:#00008b" <?php if ((isset($hl_color))&&($hl_color=="#00008b"))              echo "selected";?> >Dark Blue</option>
<option value="#008b8b"              style="background:#008b8b" <?php if ((isset($hl_color))&&($hl_color=="#008b8b"))              echo "selected";?> >Dark Cyan</option>
<option value="#b8860b"              style="background:#b8860b" <?php if ((isset($hl_color))&&($hl_color=="#b8860b"))              echo "selected";?> >Dark Golden Rod</option>
<option value="#a9a9a9"              style="background:#a9a9a9" <?php if ((isset($hl_color))&&($hl_color=="#a9a9a9"))              echo "selected";?> >Dark Gray</option>
<option value="#006400"              style="background:#006400" <?php if ((isset($hl_color))&&($hl_color=="#006400"))              echo "selected";?> >Dark Green</option>
<option value="#bdb76b"              style="background:#bdb76b" <?php if ((isset($hl_color))&&($hl_color=="#bdb76b"))              echo "selected";?> >Dark Khaki</option>
<option value="#8b008b"              style="background:#8b008b" <?php if ((isset($hl_color))&&($hl_color=="#8b008b"))              echo "selected";?> >Dark Magenta</option>
<option value="#556b2f"              style="background:#556b2f" <?php if ((isset($hl_color))&&($hl_color=="#556b2f"))              echo "selected";?> >Dark Olive Green</option>
<option value="#9932cc"              style="background:#9932cc" <?php if ((isset($hl_color))&&($hl_color=="#9932cc"))              echo "selected";?> >Dark Orchid</option>
<option value="#8b0000"              style="background:#8b0000" <?php if ((isset($hl_color))&&($hl_color=="#8b0000"))              echo "selected";?> >Dark Red</option>
<option value="#8fbc8f"              style="background:#8fbc8f" <?php if ((isset($hl_color))&&($hl_color=="#8fbc8f"))              echo "selected";?> >Dark SeaGreen</option>
<option value="#483d8b"              style="background:#483d8b" <?php if ((isset($hl_color))&&($hl_color=="#483d8b"))              echo "selected";?> >Dark SlateBlue</option>
<option value="#2f4f4f"              style="background:#2f4f4f" <?php if ((isset($hl_color))&&($hl_color=="#2f4f4f"))              echo "selected";?> >Dark SlateGray</option>
<option value="#00ced1"              style="background:#00ced1" <?php if ((isset($hl_color))&&($hl_color=="#00ced1"))              echo "selected";?> >Dark Turquoise</option>
<option value="#9400d3"              style="background:#9400d3" <?php if ((isset($hl_color))&&($hl_color=="#9400d3"))              echo "selected";?> >Dark Violet</option>
<option value="#00bfff"              style="background:#00bfff" <?php if ((isset($hl_color))&&($hl_color=="#00bfff"))              echo "selected";?> >Deep Sky Blue</option>
<option value="#696969"              style="background:#696969" <?php if ((isset($hl_color))&&($hl_color=="#696969"))              echo "selected";?> >Dim Gray</option>
<option value="#1e90ff"              style="background:#1e90ff" <?php if ((isset($hl_color))&&($hl_color=="#1e90ff"))              echo "selected";?> >Dodger Blue</option>
<option value="#b22222"              style="background:#b22222" <?php if ((isset($hl_color))&&($hl_color=="#b22222"))              echo "selected";?> >Fire Brick</option>
<option value="#228b22"              style="background:#228b22" <?php if ((isset($hl_color))&&($hl_color=="#228b22"))              echo "selected";?> >Forest Green</option>
<option value="gainsboro"            style="background:#dcdcdc" <?php if ((isset($hl_color))&&($hl_color=="gainsboro"))            echo "selected";?> >Gainsboro</option>
<option value="gold"                 style="background:#ffd700" <?php if ((isset($hl_color))&&($hl_color=="gold"))                 echo "selected";?> >Gold</option>
<option value="goldenrod"            style="background:#daa520" <?php if ((isset($hl_color))&&($hl_color=="goldenrod"))            echo "selected";?> >Golden Rod</option>
<option value="#808080"              style="background:#808080" <?php if ((isset($hl_color))&&($hl_color=="#808080"))              echo "selected";?> >Gray</option>
<option value="#008000"              style="background:#008000" <?php if ((isset($hl_color))&&($hl_color=="#008000"))              echo "selected";?> >Green</option>
<option value="#adff2f"              style="background:#adff2f" <?php if ((isset($hl_color))&&($hl_color=="#adff2f"))              echo "selected";?> >Green Yellow</option>
<option value="hotpink"              style="background:#ff69b4" <?php if ((isset($hl_color))&&($hl_color=="hotpink"))              echo "selected";?> >Hot Pink</option>
<option value="#cd5c5c"              style="background:#cd5c5c" <?php if ((isset($hl_color))&&($hl_color=="#cd5c5c"))              echo "selected";?> >Indian Red</option>
<option value="#4b0082"              style="background:#4b0082" <?php if ((isset($hl_color))&&($hl_color=="#4b0082"))              echo "selected";?> >Indigo</option>
<option value="khaki"                style="background:#f0e68c" <?php if ((isset($hl_color))&&($hl_color=="khaki"))                echo "selected";?> >Khaki</option>
<option value="lavender"             style="background:#e6e6fa" <?php if ((isset($hl_color))&&($hl_color=="lavender"))             echo "selected";?> >Lavender</option>
<option value="lavenderblush"        style="background:#fff0f5" <?php if ((isset($hl_color))&&($hl_color=="lavenderblush"))        echo "selected";?> >Lavender Blush</option>
<option value="#7cfc00"              style="background:#7cfc00" <?php if ((isset($hl_color))&&($hl_color=="#7cfc00"))              echo "selected";?> >Lawn Green</option>
<option value="lemonchiffon"         style="background:#fffacd" <?php if ((isset($hl_color))&&($hl_color=="lemonchiffon"))         echo "selected";?> >Lemon Chiffon</option>
<option value="#add8e6"              style="background:#add8e6" <?php if ((isset($hl_color))&&($hl_color=="#add8e6"))              echo "selected";?> >Light Blue</option>
<option value="lightcoral"           style="background:#f08080" <?php if ((isset($hl_color))&&($hl_color=="lightcoral"))           echo "selected";?> >Light Coral</option>
<option value="lightcyan"            style="background:#e0ffff" <?php if ((isset($hl_color))&&($hl_color=="lightcyan"))            echo "selected";?> >Light Cyan</option>
<option value="lightgoldenrodyellow" style="background:#fafad2" <?php if ((isset($hl_color))&&($hl_color=="lightgoldenrodyellow")) echo "selected";?> >Light Golden Rod Yellow</option>
<option value="lightgray"            style="background:#d3d3d3" <?php if ((isset($hl_color))&&($hl_color=="lightgray"))            echo "selected";?> >Light Gray</option>
<option value="#90ee90"              style="background:#90ee90" <?php if ((isset($hl_color))&&($hl_color=="#90ee90"))              echo "selected";?> >Light Green</option>
<option value="lightpink"            style="background:#ffb6c1" <?php if ((isset($hl_color))&&($hl_color=="lightpink"))            echo "selected";?> >Light Pink</option>
<option value="lightsalmon"          style="background:#ffa07a" <?php if ((isset($hl_color))&&($hl_color=="lightsalmon"))          echo "selected";?> >Light Salmon</option>
<option value="#20b2aa"              style="background:#20b2aa" <?php if ((isset($hl_color))&&($hl_color=="#20b2aa"))              echo "selected";?> >Light SeaGreen</option>
<option value="#87cefa"              style="background:#87cefa" <?php if ((isset($hl_color))&&($hl_color=="#87cefa"))              echo "selected";?> >Light Sky Blue</option>
<option value="#778899"              style="background:#778899" <?php if ((isset($hl_color))&&($hl_color=="#778899"))              echo "selected";?> >Light Slate Gray</option>
<option value="#b0c4de"              style="background:#b0c4de" <?php if ((isset($hl_color))&&($hl_color=="#b0c4de"))              echo "selected";?> >Light Steel Blue</option>
<option value="lightyellow"          style="background:#ffffe0" <?php if ((isset($hl_color))&&($hl_color=="lightyellow"))          echo "selected";?> >Light Yellow</option>
<option value="#00ff00"              style="background:#00ff00" <?php if ((isset($hl_color))&&($hl_color=="#00ff00"))              echo "selected";?> >Lime</option>
<option value="#32cd32"              style="background:#32cd32" <?php if ((isset($hl_color))&&($hl_color=="#32cd32"))              echo "selected";?> >LimeGreen</option>
<option value="linen"                style="background:#faf0e6" <?php if ((isset($hl_color))&&($hl_color=="linen"))                echo "selected";?> >Linen</option>
<option value="magenta"              style="background:#ff00ff" <?php if ((isset($hl_color))&&($hl_color=="magenta"))              echo "selected";?> >Magenta</option>
<option value="#800000"              style="background:#800000" <?php if ((isset($hl_color))&&($hl_color=="#800000"))              echo "selected";?> >Maroon</option>
<option value="#66cdaa"              style="background:#66cdaa" <?php if ((isset($hl_color))&&($hl_color=="#66cdaa"))              echo "selected";?> >Medium Aqua Marine</option>
<option value="#0000cd"              style="background:#0000cd" <?php if ((isset($hl_color))&&($hl_color=="#0000cd"))              echo "selected";?> >Medium Blue</option>
<option value="#ba55d3"              style="background:#ba55d3" <?php if ((isset($hl_color))&&($hl_color=="#ba55d3"))              echo "selected";?> >Medium Orchid</option>
<option value="#9370d8"              style="background:#9370d8" <?php if ((isset($hl_color))&&($hl_color=="#9370d8"))              echo "selected";?> >Medium Purple</option>
<option value="#3cb371"              style="background:#3cb371" <?php if ((isset($hl_color))&&($hl_color=="#3cb371"))              echo "selected";?> >Medium Sea Green</option>
<option value="#7b68ee"              style="background:#7b68ee" <?php if ((isset($hl_color))&&($hl_color=="#7b68ee"))              echo "selected";?> >Medium Slate Blue</option>
<option value="#00fa9a"              style="background:#00fa9a" <?php if ((isset($hl_color))&&($hl_color=="#00fa9a"))              echo "selected";?> >Medium Spring Green</option>
<option value="#48d1cc"              style="background:#48d1cc" <?php if ((isset($hl_color))&&($hl_color=="#48d1cc"))              echo "selected";?> >Medium Turquoise</option>
<option value="#c71585"              style="background:#c71585" <?php if ((isset($hl_color))&&($hl_color=="#c71585"))              echo "selected";?> >Medium Violet Red</option>
<option value="#191970"              style="background:#191970" <?php if ((isset($hl_color))&&($hl_color=="#191970"))              echo "selected";?> >Midnight Blue</option>
<option value="mintcream"            style="background:#f5fffa" <?php if ((isset($hl_color))&&($hl_color=="mintcream"))            echo "selected";?> >Mint Cream</option>
<option value="mistyrose"            style="background:#ffe4e1" <?php if ((isset($hl_color))&&($hl_color=="mistyrose"))            echo "selected";?> >Misty Rose</option>
<option value="moccasin"             style="background:#ffe4b5" <?php if ((isset($hl_color))&&($hl_color=="moccasin"))             echo "selected";?> >Moccasin</option>
<option value="navajowhite"          style="background:#ffdead" <?php if ((isset($hl_color))&&($hl_color=="navajowhite"))          echo "selected";?> >Navajo White</option>
<option value="#000080"              style="background:#000080" <?php if ((isset($hl_color))&&($hl_color=="#000080"))              echo "selected";?> >Navy</option>
<option value="oldlace"              style="background:#fdf5e6" <?php if ((isset($hl_color))&&($hl_color=="oldlace"))              echo "selected";?> >Old Lace</option>
<option value="#808000"              style="background:#808000" <?php if ((isset($hl_color))&&($hl_color=="#808000"))              echo "selected";?> >Olive</option>
<option value="#6b8e23"              style="background:#6b8e23" <?php if ((isset($hl_color))&&($hl_color=="#6b8e23"))              echo "selected";?> >Olive Drab</option>
<option value="orange"               style="background:#ffa500" <?php if ((isset($hl_color))&&($hl_color=="orange"))               echo "selected";?> >Orange</option>
<option value="orangered"            style="background:#ff4500" <?php if ((isset($hl_color))&&($hl_color=="orangered"))            echo "selected";?> >Orange Red</option>
<option value="orchid"               style="background:#da70d6" <?php if ((isset($hl_color))&&($hl_color=="orchid"))               echo "selected";?> >Orchid</option>
<option value="palegoldenrod"        style="background:#eee8aa" <?php if ((isset($hl_color))&&($hl_color=="palegoldenrod"))        echo "selected";?> >Pale Golden Rod</option>
<option value="#98fb98"              style="background:#98fb98" <?php if ((isset($hl_color))&&($hl_color=="#98fb98"))              echo "selected";?> >Pale Green</option>
<option value="#afeeee"              style="background:#afeeee" <?php if ((isset($hl_color))&&($hl_color=="#afeeee"))              echo "selected";?> >Pale Turquoise</option>
<option value="palevioletred"        style="background:#d87093" <?php if ((isset($hl_color))&&($hl_color=="palevioletred"))        echo "selected";?> >Pale Violet Red</option>
<option value="papayawhip"           style="background:#ffefd5" <?php if ((isset($hl_color))&&($hl_color=="papayawhip"))           echo "selected";?> >Papaya Whip</option>
<option value="peachpuff"            style="background:#ffdab9" <?php if ((isset($hl_color))&&($hl_color=="peachpuff"))            echo "selected";?> >Peach Puff</option>
<option value="#cd853f"              style="background:#cd853f" <?php if ((isset($hl_color))&&($hl_color=="#cd853f"))              echo "selected";?> >Peru</option>
<option value="pink"                 style="background:#ffc0cb" <?php if ((isset($hl_color))&&($hl_color=="pink"))                 echo "selected";?> >Pink</option>
<option value="plum"                 style="background:#dda0dd" <?php if ((isset($hl_color))&&($hl_color=="plum"))                 echo "selected";?> >Plum</option>
<option value="#b0e0e6"              style="background:#b0e0e6" <?php if ((isset($hl_color))&&($hl_color=="#b0e0e6"))              echo "selected";?> >Powder Blue</option>
<option value="#800080"              style="background:#800080" <?php if ((isset($hl_color))&&($hl_color=="#800080"))              echo "selected";?> >Purple</option>
<option value="red"                  style="background:#ff0000" <?php if ((isset($hl_color))&&($hl_color=="red"))                  echo "selected";?> >Red</option>
<option value="#bc8f8f"              style="background:#bc8f8f" <?php if ((isset($hl_color))&&($hl_color=="#bc8f8f"))              echo "selected";?> >Rosy Brown</option>
<option value="#4169e1"              style="background:#4169e1" <?php if ((isset($hl_color))&&($hl_color=="#4169e1"))              echo "selected";?> >Royal Blue</option>
<option value="#8b4513"              style="background:#8b4513" <?php if ((isset($hl_color))&&($hl_color=="#8b4513"))              echo "selected";?> >Saddle Brown</option>
<option value="salmon"               style="background:#fa8072" <?php if ((isset($hl_color))&&($hl_color=="salmon"))               echo "selected";?> >Salmon</option>
<option value="sandybrown"           style="background:#f4a460" <?php if ((isset($hl_color))&&($hl_color=="sandybrown"))           echo "selected";?> >Sandy Brown</option>
<option value="#2e8b57"              style="background:#2e8b57" <?php if ((isset($hl_color))&&($hl_color=="#2e8b57"))              echo "selected";?> >Sea Green</option>
<option value="#a0522d"              style="background:#a0522d" <?php if ((isset($hl_color))&&($hl_color=="#a0522d"))              echo "selected";?> >Sienna</option>
<option value="#c0c0c0"              style="background:#c0c0c0" <?php if ((isset($hl_color))&&($hl_color=="#c0c0c0"))              echo "selected";?> >Silver</option>
<option value="#87ceeb"              style="background:#87ceeb" <?php if ((isset($hl_color))&&($hl_color=="#87ceeb"))              echo "selected";?> >SkyBlue</option>
<option value="#6a5acd"              style="background:#6a5acd" <?php if ((isset($hl_color))&&($hl_color=="#6a5acd"))              echo "selected";?> >Slate Blue</option>
<option value="#708090"              style="background:#708090" <?php if ((isset($hl_color))&&($hl_color=="#708090"))              echo "selected";?> >Slate Gray</option>
<option value="#00ff7f"              style="background:#00ff7f" <?php if ((isset($hl_color))&&($hl_color=="#00ff7f"))              echo "selected";?> >Spring Green</option>
<option value="#4682b4"              style="background:#4682b4" <?php if ((isset($hl_color))&&($hl_color=="#4682b4"))              echo "selected";?> >Steel Blue</option>
<option value="tan"                  style="background:#d2b48c" <?php if ((isset($hl_color))&&($hl_color=="tan"))                  echo "selected";?> >Tan</option>
<option value="#008080"              style="background:#008080" <?php if ((isset($hl_color))&&($hl_color=="#008080"))              echo "selected";?> >Teal</option>
<option value="thistle"              style="background:#d8bfd8" <?php if ((isset($hl_color))&&($hl_color=="thistle"))              echo "selected";?> >Thistle</option>
<option value="tomato"               style="background:#ff6347" <?php if ((isset($hl_color))&&($hl_color=="tomato"))               echo "selected";?> >Tomato</option>
<option value="#40e0d0"              style="background:#40e0d0" <?php if ((isset($hl_color))&&($hl_color=="#40e0d0"))              echo "selected";?> >Turquoise</option>
<option value="violet"               style="background:#ee82ee" <?php if ((isset($hl_color))&&($hl_color=="violet"))               echo "selected";?> >Violet</option>
<option value="wheat"                style="background:#f5deb3" <?php if ((isset($hl_color))&&($hl_color=="wheat"))                echo "selected";?> >Wheat</option>
<option value="yellow"               style="background:#ffff00" <?php if ((isset($hl_color))&&($hl_color=="yellow"))               echo "selected";?> >Yellow</option>
<option value="#9acd32"              style="background:#9acd32" <?php if ((isset($hl_color))&&($hl_color=="#9acd32"))              echo "selected";?> >Yellow Green</option>
</select>
</div>





<?php
/*----------------------------------------------------------*\
|                                                            |
|      ________)                         ______)             |
|     (, /                              (, /         /)      |
|       /___, __   _ ___   _____  _/_     /    _  _ (/       |
|    ) /     / (__(/_// (_(_) / (_(__  ) /   _(/_(__/ )_     |
|   (_/  ©2011 Bradley Klco             (_)                  |
|                                                            |
\*----------------------------------------------------------*/
?>