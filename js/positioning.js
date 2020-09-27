//social icons
const youtube = document.querySelector('.youtube');
const wiki_header = document.querySelector('.wiki-header');
const twitch = document.querySelector('.twitch');
const roll20 = document.querySelector('.roll20');
const patreon = document.querySelector('.patreon');
const twitter = document.querySelector('.twitter');
const instagram = document.querySelector('.instagram');
const facebook = document.querySelector('.facebook');

// social right constants
const youtubeRight = 0.476;
const wiki_headerRight = 0.376;
const twitchRight = 0.301;
const roll20Right = 0.241;
const patreonRight = 0.160;
const twitterRight = 0.111;
const instagramRight = 0.094;
const facebookRight = 0.051;

//=================main ctas===============
const home = document.querySelector('.home');
const about = document.querySelector('.about');
const faq = document.querySelector('.faq');
const wiki = document.querySelector('.wiki');
const contact = document.querySelector('.contact');
const charity = document.querySelector('.charity');
const store = document.querySelector('.store');

// top constants
const homeTop = 0.104;
const aboutTop = 0.2;
const faqTop = 0.224;
const wikiTop = 0.225;
const contactTop = 0.266;
const charityTop = 0.33;
const storeTop = 0.477;

// left contants
const homeLeft = 0.021;
const aboutLeft = 0.024;
const faqLeft = 0.073;
const wikiLeft = 0.146;
const contactLeft = 0.205;
const charityLeft = 0.194;
const storeLeft = 0.142;

//=============== Get Started ======================
const formBtn = document.getElementById('formBtn');
const formBtnTop = 0.674;
const formBtnLeft = 0.786;

//scale constant
const scale = 0.00052;

window.addEventListener('load', function () {
  let screenSize = window.innerWidth;
  if (screenSize > 991) {
    youtube.style.right = `${screenSize * youtubeRight}px`;
    wiki_header.style.right = `${screenSize * wiki_headerRight}px`;
    twitch.style.right = `${screenSize * twitchRight}px`;
    roll20.style.right = `${screenSize * roll20Right}px`;
    patreon.style.right = `${screenSize * patreonRight}px`;
    twitter.style.right = `${screenSize * twitterRight}px`;
    instagram.style.right = `${screenSize * instagramRight}px`;
    facebook.style.right = `${screenSize * facebookRight}px`;

    home.style.top = `${screenSize * homeTop}px`;
    home.style.left = `${screenSize * homeLeft}px`;
    home.style.transform = `scale(${screenSize * scale})`;

    about.style.top = `${screenSize * aboutTop}px`;
    about.style.left = `${screenSize * aboutLeft}px`;
    about.style.transform = `scale(${screenSize * scale})`;

    faq.style.top = `${screenSize * faqTop}px`;
    faq.style.left = `${screenSize * faqLeft}px`;
    faq.style.transform = `scale(${screenSize * scale})`;

    wiki.style.top = `${screenSize * wikiTop}px`;
    wiki.style.left = `${screenSize * wikiLeft}px`;
    wiki.style.transform = `scale(${screenSize * scale})`;

    charity.style.top = `${screenSize * charityTop}px`;
    charity.style.left = `${screenSize * charityLeft}px`;
    charity.style.transform = `scale(${screenSize * scale})`;

    contact.style.top = `${screenSize * contactTop}px`;
    contact.style.left = `${screenSize * contactLeft}px`;
    contact.style.transform = `scale(${screenSize * scale})`;

    store.style.top = `${screenSize * storeTop}px`;
    store.style.left = `${screenSize * storeLeft}px`;
    store.style.transform = `scale(${screenSize * scale})`;

    formBtn.style.top = `${screenSize * formBtnTop}px`;
    formBtn.style.left = `${screenSize * formBtnLeft}px`;
  } else {
    home.style.transform = `none`;
    about.style.transform = `none`;
    faq.style.transform = `none`;
    wiki.style.transform = `none`;
    charity.style.transform = `none`;
    contact.style.transform = `none`;
    store.style.transform = `none`;
  }
});

window.addEventListener('resize', function () {
  let screenSize = window.innerWidth;

  if (screenSize > 991) {
    youtube.style.right = `${screenSize * youtubeRight}px`;
    wiki_header.style.right = `${screenSize * wiki_headerRight}px`;
    twitch.style.right = `${screenSize * twitchRight}px`;
    roll20.style.right = `${screenSize * roll20Right}px`;
    patreon.style.right = `${screenSize * patreonRight}px`;
    twitter.style.right = `${screenSize * twitterRight}px`;
    instagram.style.right = `${screenSize * instagramRight}px`;
    facebook.style.right = `${screenSize * facebookRight}px`;

    home.style.top = `${screenSize * homeTop}px`;
    home.style.left = `${screenSize * homeLeft}px`;
    home.style.transform = `scale(${screenSize * scale})`;

    about.style.top = `${screenSize * aboutTop}px`;
    about.style.left = `${screenSize * aboutLeft}px`;
    about.style.transform = `scale(${screenSize * scale})`;

    faq.style.top = `${screenSize * faqTop}px`;
    faq.style.left = `${screenSize * faqLeft}px`;
    faq.style.transform = `scale(${screenSize * scale})`;

    wiki.style.top = `${screenSize * wikiTop}px`;
    wiki.style.left = `${screenSize * wikiLeft}px`;
    wiki.style.transform = `scale(${screenSize * scale})`;

    charity.style.top = `${screenSize * charityTop}px`;
    charity.style.left = `${screenSize * charityLeft}px`;
    charity.style.transform = `scale(${screenSize * scale})`;

    contact.style.top = `${screenSize * contactTop}px`;
    contact.style.left = `${screenSize * contactLeft}px`;
    contact.style.transform = `scale(${screenSize * scale})`;

    store.style.top = `${screenSize * storeTop}px`;
    store.style.left = `${screenSize * storeLeft}px`;
    store.style.transform = `scale(${screenSize * scale})`;

    formBtn.style.top = `${screenSize * formBtnTop}px`;
    formBtn.style.left = `${screenSize * formBtnLeft}px`;
  } else {
    home.style.transform = `none`;
    about.style.transform = `none`;
    faq.style.transform = `none`;
    wiki.style.transform = `none`;
    charity.style.transform = `none`;
    contact.style.transform = `none`;
    store.style.transform = `none`;
  }
});
