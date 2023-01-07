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

This is very useful because it gives us a standard that we can use when defining Block Styles and some of the other styles around our theme. It also allows us to change color schemes quickly and globally, as is often required when a client is rebranding.

## Block Styles

Block Styles allow theme developers to provide style customization options without having to force content creators to add CSS classes manually or configure a ton of block options.

In this theme, we [register two block styles](https://github.com/alphaparticlecode/fse-demo/blob/main/inc/register-block-styles.php) as part of the `core/heading` block: "With Border" and "With Bubble". Once registered, these styles will show up when the block they are registered to is selected.

<img width="1440" alt="A screenshot showing how the block style controls are presented in the block editor" src="https://user-images.githubusercontent.com/2965444/211170223-638c105e-3d98-4271-9f95-2d4c6ffc7b7f.png">

When one of these styles is selected, the only change to the actual markup that happens is that a CSS class gets applied. In the case of our "With Bubble" style, the CSS class `is-style-fsedemo-bubble-heading` is applied. However, for the style to have any frontend difference from the default block appearance, CSS has to be [written for each of these classes](https://github.com/alphaparticlecode/fse-demo/blob/main/assets/css/src/block-styles.css). Once this CSS is in place, the frontend output will changed based on which Block Style is selected in the editor.

One drawback of Block Styles is that, depending on which CSS properties are affected by the style, certain Block Editor controls can conflict with the styling provided by the theme author. For example, if your Block Style dictates a background color, this will conflict with the background color control in the editor. If you are looking to control block editor attributes that already have editor controls, one of the other block paradigms, such as Block Variations, might be a better fit for your use case.

## Future Sections

Some concepts to explore here:
  - Block variations
  - Block patterns
  - Block editor template parts
  - Simple custom block without ACF
  - Is there good core support for repeaters without ACF yet?
  - Create Block Theme [plugin](https://wordpress.org/plugins/create-block-theme/)
  
