<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  postimage:
    label: Main Teaser Image
    type:  selector
    mode:  single
    types:
        - image
  rollover:
    label: Rollover Gif
    type:  selector
    mode:  single
    types:
        - image
  headline:
    label: Headline
    type:  text
  subtitle:
    label: Subtitle
    type:  text
  slug:
    label: slug
    type:  text
  text:
    label: Text
    type:  textarea
  stat1:
    label: Stat 1
    type:  text
  stat1subtext:
    label: Stat 1 Label
    type:  text
  stat2:
    label: Stat 2
    type:  text
  stat2subtext:
    label: Stat 2 Label
    type:  text
  stat3:
    label: Stat 3
    type:  text
  stat3subtext:
    label: Stat 3 Label
    type:  text
  projectbigtext:
    label: Big Text
    type: textarea
  projectbigtextimage:
    label: Big Text Image
    type:  selector
    mode:  single
    types:
        - image
  projectimage1:
    label: Project Image/Video 1
    type:  selector
    mode:  single
    types:
        - all
  text1:
    label: Text 1
    type: text
  subtext1:
    label: Subtext 1
    type: textarea
  projectimage2:
    label: Project Image/Video 2
    type:  selector
    mode:  single
    types:
        - all
  text2:
    label: Text 2
    type: text
  subtext2:
    label: Subtext 2
    type: textarea
  projectimage3:
    label: Project Image/Video 3
    type:  selector
    mode:  single
    types:
        - all
  text3:
    label: Title 3
    type: text
  subtext3:
    label: Subtext 3
    type: textarea
  projectimage4:
    label: Project Image/Video 4
    type:  selector
    mode:  single
    types:
        - all
  text4:
    label: Title 4
    type: text
  subtext4:
    label: Subext 4
    type: textarea