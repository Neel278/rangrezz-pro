body {
  display:grid;
  place-content:center;
  min-height:100vh;
  overflow:hidden;
}

.w {
  width:50vmin;
  height:80vmin;
}

.ts {
  width:100%; height:100%;
  position:relative;
  --barH:10%;/*active zone height = 100% - barH*/
}

.t {
  --w:20%;
  display:block; width:var(--w); height:var(--barH);
  position:absolute; bottom:0; left:var(--l);
  transform-origin:top left;
}

.t img {
  dislay:block; width:100%; height:100%;
  object-fit:cover;
  transform:scale(0.8);
}

[type="radio"] { 
  display:none; 
}

:checked + label.t {
  left:0; bottom:var(--barH);
  height:calc(100% - var(--barH));
}

:checked + label.t img {
  object-fit:contain;
}

/* 
optional
*/

.ts {/*thumbnails bar*/
  perspective:100px;
  perspective-origin:center center;
  transform-style:preserve-3d;
  pointer-events:none;
}

.ts:after {/*the plate*/
  content:"";
  display:block; width:100%; height:15px;
  position:absolute; bottom:0;
  background:linear-gradient(transparent 20%, rgba(0,0,0,0.1));
  transform:rotateX(90deg)scaleX(1.2);
  transform-origin:bottom center;
}

:not(:checked) + .t {/*inactive labels*/
  transform:translate3d(0, 0, -5px);
  pointer-events:auto;
}

:not(:checked) + .t:hover {
  transform:translate3d(0, -7px, -5px);
  box-shadow:0 30px 30px -25px rgba(0,0,0,0.3);
  cursor:pointer;
}

:not(:checked) + .t img {
  transform:scale(0.9);/*create gaps*/
}

:checked + .t {/*active label*/
  box-shadow:0 0 0 transparent;
  animation:anim 2s 1;
} @keyframes anim {
  from { transform:rotateY(6deg)rotateX(3deg) }
}

/* 
transitions
*/
.t {/*active->inactive & hover->rest*/
  transition:transform 0.5s, bottom 0.6s, left 0.6s, width 0.3s, box-shadow 1s;
}
.t:hover, :checked + .t {
  transition:transform 0.5s, bottom 0.6s, left 0.6s, width 0.3s, box-shadow 0s;
}