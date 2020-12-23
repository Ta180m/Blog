---
layout: post
title:  "Linux Tricks"
date:   2020-12-23 17:37:08 -0600
author: Ta180m
tags: ["Random", "Linux"]
---


## Impress your friends with one weird trick!

Linux is pretty tricky. Here are a few actually useful tricks.


## GDB GUI, or should I say TUI

I've got some mixed feelings about VSCodium, the text editor that I use. It's not bad, but as an Electron app, it predictably has terrible performance issues. For instance, compiling a tiny C++ file can take 10 times as long in VSCodium versus compiling it in the terminal. However, one thing that it does great, with the help of the phenomenal extension [Native Debug](https://github.com/WebFreak001/code-debug), is the excellent (although slow) integrated graphical debugging experience, using `gdb` as the backend. People often decry GUIs for being bloated and not much more useful than the command line, but in this case, the graphical debugger helps me keep track of where I'm at in my code. ([Try watching videos in your terminal](https://ta180m.github.io/2020/10/28/random-tidbits.html)) Anyways, I've been trying to find a replacement, but no other editor seems to have this nice integration. Then I found out that `gdb` has its own GUI. Or more accurately, a TUI. Just run `gdb` with the `--tui` switch and it should start up with a split screen, with your code at the top and the `gdb` command line at the bottom. Perfect! 

![GDB Tui](/assets/gdb-tui.png)



