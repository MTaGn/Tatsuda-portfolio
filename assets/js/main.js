"use strict";

document.addEventListener('DOMContentLoaded', function(){
  /*********************
    humberger / close
  *********************/
  const humbergerElem = document.querySelector(".header-container__humberger-box");
  const humbergerLineElems = document.querySelectorAll(".header-container__line");
  const humbergerLineTop = humbergerLineElems[0];
  const humbergerLineBottom = humbergerLineElems[2]; 

  const closeElem = document.querySelector(".header-container__close-box");
  const closeLineElems = document.querySelectorAll(".header-container__close-line");
  const closeElemLeft = closeLineElems[0];
  const closeElemRight = closeLineElems[1];

  const spMenuElem = document.querySelector(".header-container__sp-menu-box");

  humbergerElem.addEventListener("click", () => {
    console.log("humberger click");
    humbergerElem.classList.toggle("hide");
    closeElem.classList.toggle("hide");
    // close-line回転用クラス付与
    closeElemLeft.classList.add("rotate-close-line-left");
    closeElemRight.classList.add("rotate-close-line-right");

    spMenuElem.classList.toggle("hide");
  });

  closeElem.addEventListener("click", () => {
    closeElem.classList.toggle("hide");
    humbergerElem.classList.toggle("hide");
    // humberger-line回転用クラス付与
    humbergerLineTop.classList.add("rotate-humbg-line-left");
    humbergerLineBottom.classList.add("rotate-humbg-line-right");

    spMenuElem.classList.toggle("hide");
  });

  /*********************
    worksページサムネイル
  *********************/
  // メイン画像要素  
  let mainImgElem = document.querySelector(".works-container__main-product-img");
  // クリックされたimgのsrc取得
  const thumbnailElems = document.querySelectorAll(".works-page-container__product-thumbnail");
  thumbnailElems.forEach( (thumbnail, index) => {
    thumbnail.addEventListener("click", () => {
      // クリックサムネイルをメイン画像にする
      mainImgElem.src = thumbnail.firstElementChild.firstElementChild.src;

      // 選択されているサムネイルの透明度を1にする
      thumbnailElems.forEach( (thumbnail, index) => {
        thumbnail.classList.remove("selected");
      });
      thumbnail.classList.add("selected");
    });
  } );

  /*********************
    worksページMenu開閉
  *********************/
  // メニュー開閉
  let toggleMenuElem = document.querySelector(".works-page-container__menus-checkbox").checked;
  const toggleLabelElem = document.querySelector(".works-page-container__menus-label");
  const menuElem = document.querySelector(".works-page-container__product-menus");
  toggleLabelElem.addEventListener("click", () => {
    menuElem.classList.toggle("works-page-container__product-menus-non-checked");
  });

  // SPの時はメニュークリック時にメニュー閉じる(SPのときにdisplay:noneを効かせている)
  const menuElems = document.querySelectorAll(".works-page-container__product-menus");
  menuElems.forEach( (menu) => {
    menu.addEventListener("click", () => {
      menuElem.classList.toggle("works-page-container__product-menus-non-checked");
      // SPの時はメニュークリック時にチェックボックスOFFにする
      if (toggleMenuElem) {
        document.querySelector(".works-page-container__menus-checkbox").checked = false;
      }
    });
  });  

});
