/**
 * Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

// This file contains style definitions that can be used by CKEditor plugins.
//
// The most common use for it is the "stylescombo" plugin, which shows a combo
// in the editor toolbar, containing all styles. Other plugins instead, like
// the div plugin, use a subset of the styles on their feature.
//
// If you don't have plugins that depend on this file, you can simply ignore it.
// Otherwise it is strongly recommended to customize this file to match your
// website requirements and design properly.

CKEDITOR.stylesSet.add( 'drupal', [
    /* Block Styles */

    // These styles are already available in the "Format" combo ("format" plugin),
    // so they are not needed here by default. You may enable them to avoid
    // placing the "Format" combo in the toolbar, maintaining the same features.
    /*
    { name: 'Paragraph',        element: 'p' },
    { name: 'Heading 1',        element: 'h1' },
    { name: 'Heading 2',        element: 'h2' },
    { name: 'Heading 3',        element: 'h3' },
    { name: 'Heading 4',        element: 'h4' },
    { name: 'Heading 5',        element: 'h5' },
    { name: 'Heading 6',        element: 'h6' },
    { name: 'Preformatted Text',element: 'pre' },
    { name: 'Address',          element: 'address' },
    */


 
    { name: 'Paragraph',        element: 'p' },

    { name: 'Introduction Paragraph',           element: 'p',  attributes: { 'class': 'lead' }  },

    { name: 'Title',      element: 'h2',  attributes: { 'class': 'title' } },

    { name: 'Heading',  element: 'h3',  attributes: { 'class': 'heading' } },

    { name: 'SubHeading',  element: 'h4',  attributes: { 'class': 'sub-heading' } },




    /* Inline Styles */

    // These are core styles available as toolbar buttons. You may opt enabling
    // some of them in the Styles combo, removing them from the toolbar.
    // (This requires the "stylescombo" plugin)
    /*
    { name: 'Strong',           element: 'strong', overrides: 'b' },
    { name: 'Emphasis',         element: 'em'   , overrides: 'i' },
    { name: 'Underline',        element: 'u' },
    { name: 'Strikethrough',    element: 'strike' },
    { name: 'Subscript',        element: 'sub' },
    { name: 'Superscript',      element: 'sup' },
    */

     

    /* Object Styles */

    {
        name: 'Styled image (left)',
        element: 'img',
        attributes: { 'class': 'image-left' }
    },

    {
        name: 'Styled image (right)',
        element: 'img',
        attributes: { 'class': 'image-right' }
    },


    {
        name: 'Styled image (central)',
        element: 'img',
        attributes: { 'class': 'image-central' }
    }

    
]);