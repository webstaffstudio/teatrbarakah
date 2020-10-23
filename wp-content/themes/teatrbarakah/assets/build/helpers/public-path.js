/* eslint-env browser */
/* globals TEATRBARAKAH_DIST_PATH */

/** Dynamically set absolute public path from current protocol and host */
if (TEATRBARAKAH_DIST_PATH) {
  __webpack_public_path__ = TEATRBARAKAH_DIST_PATH; // eslint-disable-line no-undef, camelcase
}
