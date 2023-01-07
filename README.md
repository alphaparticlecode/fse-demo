# Block Concepts and Full Site Editing (FSE) Exploration Theme

As WordPress continues to develop, there are many concepts around blocks and the new full site editor that we haven't yet explored. This theme attempts to both add some agency-specific documentation around some of these concepts as well as provide a demo theme so these concepts can be explored on a live site.

This theme benefits greatly from the [Jace](https://wordpress.org/themes/jace/) theme, with lots of learnings and code taken from there.

## theme.json

Originally introduced in WordPress 5.8, [theme.json](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/) is a JSON file that lives in the root of a WordPress theme and provides global configuration options for the WordPress Block Editor along with the ability to configure specific options for specific blocks.

In the context of this theme, we use theme.json to set the color pallete for the site as a whole, which controls which colors appear in the color pickers inside the Block Editor.

<img width="555" alt="A Block Editor color picker showing the preset colors that are defined in theme.json" src="https://user-images.githubusercontent.com/2965444/211169772-decbcc56-bdcd-45d4-b8d5-dd467338da54.png">

Per [Rich Tabor's suggestion](https://richtabor.com/standardizing-theme-json-colors/), the keys we use to define colors are standardized and can be used in our CSS by referencing them with variables. For example:

```
background-color: var(--wp--preset--color--secondary);
```

## Block Styles




## Scratchpad

Some concepts to explore here:
  - Block variations
  - Block patterns
  - Block editor template parts
  - Simple custom block without ACF
  - Is there good core support for repeaters without ACF yet?
  - Create Block Theme [plugin](https://wordpress.org/plugins/create-block-theme/)
  
