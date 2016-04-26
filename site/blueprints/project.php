<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  slug:
    label: slug
    type:  text
  text:
    label: Text
    type:  textarea
  tags:
    label: Tags
    type:  tags