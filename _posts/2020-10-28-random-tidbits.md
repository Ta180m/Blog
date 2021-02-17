---
layout: post
title:  "Random Tidbits"
author: Ta180m
tags: ["Random", "Linux"]
---


## Play videos in your terminal!

![On YouTube](/blog/assets/tux-video.png){: height="300px" } ![In a terminal](/blog/assets/tux-text.png){: height="300px" }

Assuming you have mpv, just run `CACA_DRIVER=ncurses mpv -vo=caca *path_to_video*`.

You can also pipe `youtube-dl` into this command, but sometimes I get a bunch of cryptic error messages. I've found that downloading the video beforehand tends to work better.

I also recommend turning down your terminal's font size.

Goodbye X, hello tty!
