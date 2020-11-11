/* global magicpiVars, cookie */
jQuery(document).ready(function () {
  'use strict'
  var $notice = jQuery('.magicpi-cookies')
  var cookieId = 'magicpi_cookie_notice'
  var cookieValue = magicpiVars.options.cookie_notice_version

  if (cookie(cookieId) !== cookieValue) {
    setTimeout(function () {
      $notice.addClass('magicpi-cookies--active')

      $notice.on('click', '.magicpi-cookies__accept-btn', function (e) {
        e.preventDefault()
        $notice.removeClass('magicpi-cookies--active').addClass('magicpi-cookies--inactive')
        // set cookie
        cookie(cookieId, cookieValue)
      })
    }, 2500)
  }
})
