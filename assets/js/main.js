/* 01) DOM Elements --------------------------------------------------------- */

const g_pBody           = document.querySelector("body");
const g_pScrollTop      = document.querySelector(".scroll-top");

const g_pHeader         = document.querySelector("header");
const g_pHamburger      = document.querySelector(".hamburger");
const g_pNavbar         = document.querySelector(".navbar");

const g_vAnchors        = document.querySelectorAll("a");

const g_vLogos          = document.querySelectorAll(".logo-gallery .logo-box");
const g_pPopupBox       = document.querySelector(".popup-box");

const g_pPopupClose     = document.querySelector(".popup .close");
const g_pPopupText      = document.querySelector(".popup p");
const g_pPopupImage     = document.querySelector(".popup img");

const g_pPrevious       = document.querySelector(".popup-box .controls .prev");
const g_pNext           = document.querySelector(".popup-box .controls .next");

const g_pContactForm    = document.querySelector(".contacts form");

const g_pCaptchaCanvas  = document.querySelector(".captcha canvas");

const g_pCaptchaInput   = document.querySelector(".captcha-input input");
const g_pCaptchaReload  = document.querySelector(".captcha-box .reload");

const g_pStatusText     = document.querySelector(".status-text");

const g_vCharacters     = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
						   'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T',
						   'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd',
						   'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n',
						   'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x',
						   'y', 'z', 0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

let   g_iHeaderHeight   = 0;

const g_iMinPopupIndex  = 1;
const g_iMaxPopupIndex  = g_vLogos.length;

let   g_iCanvasWidth    = 0;
let   g_iCanvasHeight   = 0;
let   g_sCaptchaContent = "";

if (g_pHeader != null)
{
	g_iHeaderHeight = g_pHeader.offsetHeight;
}

if (g_pCaptchaCanvas != null)
{
	g_iCanvasWidth  = g_pCaptchaCanvas.width;
	g_iCanvasHeight = g_pCaptchaCanvas.height;
}

/* 02) Hamburger Button ----------------------------------------------------- */

if (g_pHamburger != null)
{
	g_pHamburger.addEventListener("click", () => {
		g_pBody.classList.toggle("no-scroll");

		g_pHamburger.classList.toggle("clicked");
		g_pNavbar.classList.toggle("show");
	});	
}

/* 03) Scroll Top ----------------------------------------------------------- */

window.addEventListener("scroll", () => {
	if (g_pScrollTop != null)
	{
		if (window.scrollY > 0)
		{
			g_pScrollTop.classList.add("show");
		}
		else
		{
			g_pScrollTop.classList.remove("show");
		}		
	}
});

/* 04) Page Scroll ---------------------------------------------------------- */

g_vAnchors.forEach(l_pAnchor => {
	l_pAnchor.addEventListener("click", (p_pEvent) => {
		let l_sHref     = l_pAnchor.href;
		let l_iPosition = l_sHref.indexOf("#");

		let l_sTargetID = "";

		if (l_iPosition != -1)
		{
			p_pEvent.preventDefault();

			l_sTargetID     = l_sHref.substring(l_iPosition);

			const l_pTarget = document.querySelector(l_sTargetID);

			if ((g_pBody   != null) && (g_pHamburger != null) &&
				(g_pNavbar != null) && (l_pTarget    != null))
			{
				g_pBody.classList.remove("no-scroll");

				g_pHamburger.classList.remove("clicked");
				g_pNavbar.classList.remove("show");
				
				window.scroll({
					top: l_pTarget.offsetTop - g_iHeaderHeight,
					behavior: 'smooth'
				});
			}
		}
	});
});

/* 05) Captcha -------------------------------------------------------------- */

generateCaptcha();

if (g_pCaptchaReload != null)
{
	g_pCaptchaReload.addEventListener("click", () => {
		resetCaptcha();

		generateCaptcha();
	});	
}

if ((g_pContactForm  != null) && (g_pCaptchaCanvas != null) &&
	(g_pCaptchaInput != null) && (g_pStatusText    != null))
{
	g_pContactForm.addEventListener("submit", (p_pEvent) => {
		let l_sInputCaptcha = g_pCaptchaInput.value;

		if (l_sInputCaptcha != g_sCaptchaContent)
		{
			p_pEvent.preventDefault();

			g_pStatusText.classList.remove("hide");

			setTimeout(() => {
				resetCaptcha();

				generateCaptcha();
			}, 2000);
		}
	});	
}

/* 06) Show/Hide Popup ------------------------------------------------------ */

if ((g_pBody       != null) && (g_pPopupBox   != null) &&
	(g_pPopupClose != null) && (g_pPopupImage != null) &&
	(g_pPopupText  != null))
{
	g_pPopupClose.addEventListener("click", () => {
		g_pBody.classList.remove("no-scroll");
		g_pPopupBox.classList.remove("show");
	});

	g_vLogos.forEach(l_pLogo => {
		l_pLogo.addEventListener("click", () => {
			g_pBody.classList.add("no-scroll");
			g_pPopupBox.classList.add("show");

			g_pPopupImage.src = l_pLogo.querySelector("img").src;
			g_pPopupText.innerHTML = l_pLogo.querySelector("span").innerHTML;
		});
	});
}

/* 07) Change Popup Content ------------------------------------------------- */

if ((g_pPopupBox != null) && (g_pPopupImage != null) &&
	(g_pPrevious != null) && (g_pNext       != null))
{
	g_pPrevious.addEventListener("click", () => {
		let l_sCurrentURL  = g_pPopupImage.src;
		let l_sCurrentYear = getYearFromURL(l_sCurrentURL);
	
		let l_iCounter     = g_iMinPopupIndex;
	
		let l_sFirstYear   = 0;
		let l_sLastYear    = 0;
	
		g_vLogos.forEach(l_pLogo => {
			let l_sURL = l_pLogo.querySelector("img").src;
	
			if (l_iCounter == g_iMinPopupIndex)
			{
				l_sFirstYear = getYearFromURL(l_sURL);
			}
			else if (l_iCounter == g_iMaxPopupIndex)
			{
				l_sLastYear = getYearFromURL(l_sURL);
			}
	
			l_iCounter++;
		});
	
		if (l_sCurrentYear == l_sFirstYear)
		{
			l_sCurrentYear = l_sLastYear;
		}
		else if (l_sCurrentYear == "2022")
		{
			l_sCurrentYear = "2019";
		}
		else
		{
			l_sCurrentYear--;
		}
	
		changePopup(l_sCurrentYear);
	});
	
	g_pNext.addEventListener("click", () => {
		let l_sCurrentURL  = g_pPopupImage.src;
		let l_sCurrentYear = getYearFromURL(l_sCurrentURL);
	
		let l_iCounter     = g_iMinPopupIndex;
	
		let l_sFirstYear   = 0;
		let l_sLastYear    = 0;
	
		g_vLogos.forEach(l_pLogo => {
			let l_sURL = l_pLogo.querySelector("img").src;
	
			if (l_iCounter == g_iMinPopupIndex)
			{
				l_sFirstYear = getYearFromURL(l_sURL);
			}
			else if (l_iCounter == g_iMaxPopupIndex)
			{
				l_sLastYear = getYearFromURL(l_sURL);
			}
	
			l_iCounter++;
		});
	
		if (l_sCurrentYear == l_sLastYear)
		{
			l_sCurrentYear = l_sFirstYear;
		}
		else if (l_sCurrentYear == "2019")
		{
			l_sCurrentYear = "2022";
		}
		else
		{
			l_sCurrentYear++;
		}
	
		changePopup(l_sCurrentYear);
	});
}

/* 08) Leaflet Map ---------------------------------------------------------- */

const l_pMap = L.map("leaflet-map").setView([43.550040, 10.309440], 14);

let   l_sTiles         = "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png";
let   l_sOpenStreetMap = "https://www.openstreetmap.org/copyright";

let   l_sCopyright     = "&copy; <a target='_blank' href=" +
						l_sOpenStreetMap				 +
						">OpenStreetMap</a>";

let   l_pTilesLayer    = L.tileLayer(l_sTiles, {
	attribution: l_sCopyright,
	maxZoom: 19
}).addTo(l_pMap);

l_pMap.scrollWheelZoom.disable();



/* -------------------------------------------------------------------------- */
/* -------------------------------------------------------------------------- */
/* -------------------------------- Functions ------------------------------- */
/* -------------------------------------------------------------------------- */
/* -------------------------------------------------------------------------- */



/* 01) Reset Captcha Text --------------------------------------------------- */

function resetCaptcha()
{
	let l_pPen = g_pCaptchaCanvas.getContext("2d");

	l_pPen.clearRect(0, 0, g_iCanvasWidth, g_iCanvasHeight);
	g_pCaptchaInput.value = "";

	g_pStatusText.classList.add("hide");
}

/* 02) Generate New Captcha ------------------------------------------------- */

function generateCaptcha()
{
	let l_iIndex      = 0;

	g_sCaptchaContent = "";

    for (l_iIndex = 0; l_iIndex < 6; l_iIndex++)
	{
		let l_cRandomChar  = g_vCharacters[Math.floor(
								Math.random() * g_vCharacters.length)];

		g_sCaptchaContent += l_cRandomChar;
	}

	if (g_pCaptchaCanvas != null)
	{
		const l_iX       = g_iCanvasWidth  / 2;
		const l_iY       = g_iCanvasHeight / 3;

		let   l_pPen     = g_pCaptchaCanvas.getContext("2d");

		l_pPen.beginPath();
		l_pPen.moveTo(l_iX, 0);

		l_pPen.font      = "24px monospace";
		l_pPen.fillStyle = "#a5a5a5";
		l_pPen.textAlign = "center";
		
		l_pPen.fillText(g_sCaptchaContent, l_iX, g_iCanvasHeight - l_iY);
	}
}

/* 03) Get Year From URL ---------------------------------------------------- */

function getYearFromURL(p_sURL)
{
	let l_iStartIndex = p_sURL.lastIndexOf("/") + 1;
	let l_iEndIndex   = p_sURL.lastIndexOf(".");

	let l_sYear       = p_sURL.substring(l_iStartIndex, l_iEndIndex);

	return l_sYear;
}

/* 04) Change Popup Content ------------------------------------------------- */

function changePopup(p_sYear)
{
	g_vLogos.forEach(l_pLogo => {
		let l_sURL  = l_pLogo.querySelector("img").src;
		let l_sText = l_pLogo.querySelector("span").innerHTML;

		let l_sYear = getYearFromURL(l_sURL);

		if (l_sYear == p_sYear)
		{
			g_pPopupImage.src      = l_sURL;
			g_pPopupText.innerHTML = l_sText;
		}
	});
}