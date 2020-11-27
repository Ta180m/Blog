---
layout: post
title:  "Analyzing My Packages"
date:   2020-11-25 22:03:34 -0600
author: Ta180m
tags: ["Linux"]
---


Recently, I ran `yay -Ps`, and I was horrified to discover that I have a total of **1614** packages installed, including **193** explicitly installed packages. How did my slim and lean Arch install become so bloated? I thought it would be a good exercise to go through my list of explicity installed packages and figure out why each of them was installed.


## Core

### Essentials
 - `base`
 - `bash-completion`
 - `linux`
 - `linux-firmware`
 - `linux-headers`
 - `sudo`

### Arch stuff
 - `arch-install-scripts`
 - `archlinux-wallpaper`
 - `pacgraph`
 - `reflector`
 - `yay-bin`

### Boot and dual-boot stuff
 - `efibootmgr`
 - `grub`
 - `intel-ucode`
 - `ntfs-3g`
 - `os-prober`

### CLI tools
 - `bpytop`
 - `fish`
 - `fzf`
 - `htop`
 - `hyperfine`
 - `nano`
 - `neofetch`
 - `tldr`
 - `vi`
 - `vim`
 - `youtube-dl`


## Graphics

### Graphics
 - `intel-media-driver`
 - `libva-utils`
 - `vulkan-intel`
 - `weston`
 - `xdotool`
 - `xf86-video-nouveau`
 - `xorg-server-xwayland`
 - `xorg-xbacklight`
 - `xorg-xhost`

### KDE Plasma
 - `breeze-grub`
 - `dolphin-plugins`
 - `kcm-wacomtablet`
 - Everything in `kde-applications-meta` minus `kde-accessibility-meta`, `kde-education-meta`, and `kde-games-meta` (`kde-applications-meta` comes with about 70 applications just starting with K, so you need to remove the heavy hitters to reduce bloat)
 - `plasma-meta`
 - `plasma-wayland-session`
 - `packagekit-qt5`
 - `xdg-user-dirs`

### i3
 - `dmenu`
 - `feh`
 - `i3-wm`
 - `i3lock`
 - `i3status`

### Web browsers
 - `brave-bin`
 - `browsh-bin`
 - `chromium`
 - `firefox`
 - `links`
 - `lynx`

### Awesome free and open-source apps
 - `audacity`
 - `blender`
 - `gimp`
 - `gparted`
 - `inkscape`
 - `krita`
 - `libreoffice-fresh`
 - `mpv`
 - `obs-studio`
 - `vscodium-bin`
 - `xournalpp`

### Games and emulators
 - `2048-py`
 - `dolphin-emu`
 - Everything in the `libretro` package group.
 - `supertux`
 - `supertuxkart`
 - `yuzu-mainline-bin`


## Developer

### Stuff in `base-devel`
 - `autoconf`
 - `automake`
 - `bison`
 - `fakeroot`
 - `flex`
 - `groff`
 - `m4`
 - `make`
 - `patch`
 - `pkgconf`

### Git
 - `git`
 - `github-cli`
 - `github-desktop-bin`

### Java
 - `eclipse-java-bin`
 - `jdk-openjdk`

### Python
 - `jupyterlab`
 - `pypy3`
 - `python-pip`
 - `python-poetry`
 - `python-pylint`
 - `python-tox`
 - `python-wheel`
 - `sagemath`
 - `sagemath-jupyter`
 - `tk`
 - `twine`

### Ruby
 - `ruby`
 - `ruby-bundler`
 - `rubygems`

### zsh
 - `zsh`
 - `zsh-autosuggestions`
 - `zsh-completions`
 - `zsh-syntax-highlighting`
 - `powerline`
 - `powerline-fonts`


## Other useful stuff

### Laptop tools
 - `libinput_gestures_qt`
 - `onboard`

### Printing
 - `cups`
 - `hplip`

### Networking
 - `bluez-utils`
 - `bridge-utils`
 - `dnsmasq`
 - `ebtables`
 - `freerdp`
 - `networkmanager`
 - `net-tools`


## Pretending my computer is running something other than Arch

### Virtualization
 - `docker`
 - `edk2-ovmf`
 - `libguestfs`
 - `libvirt`
 - `lxc`
 - `lxd`
 - `qemu`
 - `vagrant`
 - `virt-manager`
 - `virtualbox`
 - `x11docker`

### Wine
 - `playonlinux`
 - `wine`
 - `wine-gecko`
 - `wine-mono`
 - `winetricks`


## Miscellaneous

### Hacking
 - `checkra1n-cli`
 - `fusee-launcher-git`
 - `ns-usbloader`
 - `nx-udev`

### Proprietary stuff
 - `unrar`
 - `zoom`

### Everything else I couldn't categorize
 - `cool-retro-term`
 - `cryfs`
 - `emacs`
 - `flatpak`
 - `noto-fonts-emoji`
 - `obs-v4l2sink`
 - `pulseaudio-bluetooth`
 - `usbutils`
 - `v4l2loopback-dkms`
