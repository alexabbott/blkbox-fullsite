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
  projectimage1:
    label: Project Image/Video 1
    type:  selector
    mode:  single
    types:
        - all
  teasertext1:
    label: Teaser Text 1
    type: textarea
  projectimage2:
    label: Project Image/Video 2
    type:  selector
    mode:  single
    types:
        - all
  teasertext2:
    label: Teaser Text 2
    type: textarea
  projectimage3:
    label: Project Image/Video 3
    type:  selector
    mode:  single
    types:
        - all
  teasertext3:
    label: Teaser Text 3
    type: textarea
  projectimage4:
    label: Project Image/Video 4
    type:  selector
    mode:  single
    types:
        - all
  teasertext4:
    label: Teaser Text 4
    type: textarea