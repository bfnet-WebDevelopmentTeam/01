"use strict";

{
  // DOM取得
  const tabMenus = document.querySelectorAll(".tab-menu-item");
  //   console.log(tabMenus);

  // イベント追加
  tabMenus.forEach((tabMenu) => {
    tabMenu.addEventListener("click", tabSwitch);
  });

  //   イベント処理
  function tabSwitch(e) {
    const tabTargetData = e.currentTarget.dataset.tab;
    // console.log(e.currentTarget);
    // console.log(e.currentTarget.dataset.tab);

    // クリックされた要素の親要素と、その小要素を取得
    const tabList = e.currentTarget.closest(".tab-menus");
    // console.log(tabList);
    const tabItems = tabList.querySelectorAll(".tab-menu-item");
    // console.log(tabItems);

    // クリックされた要素の親要素の兄弟要素の子要素を取得
    const tabPanelItems =
      tabList.nextElementSibling.querySelectorAll(".tab-panel-box");
    // console.log(tabPanelItems);

    // クリックされたタブの同階層の同階層のmenuとpanelのクラスを削除
    tabItems.forEach((tabItem) => {
      tabItem.classList.remove("is-active");
    });
    tabPanelItems.forEach((tabPanelItem) => {
      tabPanelItem.classList.remove("is-show");
    });

    // クリックされたmenu要素にis-activeクラスを追加
    e.currentTarget.classList.add("is-active");
    // クリックしたmenuのデータ属性と等しい値を持つパネルにis-showクラスを追加
    tabPanelItems.forEach((tabPanelItem) => {
      if (tabPanelItem.dataset.panel === tabTargetData) {
        tabPanelItem.classList.add("is-show");
      }
    });
  }
}