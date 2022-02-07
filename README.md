# TYPO3 Extension "headless_navigations" - Provides TypoScript definitions to enrich the [EXT:headless](https://github.com/TYPO3-Initiatives/headless) page response with proper navigations

This extension adds a "navigations" key to the default JSON response, provides constants to configure up to three custom navigations (e.g. "Main Navigation", "Meta navigation", "Side navigation") and outputs those as proper JSON to render menus in the Frontend applicaiton.

![Navigations array in default response](Documentation/response.png)

## Requirements
Extension requires TYPO3 in version at least 10.4.

## TYPO3 Installation
Install extension using composer\
``composer require friendsoftypo3headless/headless-navigations``

and then, include the TypoScript template, configure the constants and you are ready to go.

### Developers involved in the project

- Sven Petersen (DAUSKONZEPT GmbH && HardAnders GbR)
- Niels Seelhöfer
