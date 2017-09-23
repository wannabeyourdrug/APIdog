<?

	abstract class ErrorCode {

		const UNKNOWN_METHOD = 1;
		const INVALID_PARAM = 2;
		const INTERNAL_DATABASE_ERROR = 3;

		const AUTHORIZE_HAS_ERROR = 5;
		const AUTHORIZE_TOKEN_EMPTY = 6;
		const AUTHORIZE_HAS_ERROR_WHILE_CHECK = 7;
		const AUTHORIZE_HAS_ERROR_INVALID_CLIENT = 8;
		const AUTHORIZE_HAS_ERROR_CAPTCHA = 9;
		const AUTHORIZE_HAS_ERROR_2FA = 10;
		const AUTHORIZE_HAS_ERROR_INVALID_APPLICATION = 11;

		const AUTH_KEY_INVALID = 15;

		const VK_UPLOAD_NO_FILE = 19;
		const VK_UPLOAD_INVALID_TARGET = 20;
		const VK_UPLOAD_INVALID_METHOD = 21;
		const VK_UPLOAD_FILE_TOO_LARGE = 22;
		const VK_UPLOAD_GET_SERVER_FAILURE = 23;
		const VK_UPLOAD_FILE_SENT_FAILURE = 24;
		const VK_UPLOAD_SAVE_FAILED = 25;
		const VK_UPLOAD_FILE_NOT_EXIST = 26;
		const VK_UPLOAD_LINK_INCORRECT = 27;
		const VK_UPLOAD_LINK_BROKEN_CODE = 28;
		const VK_UPLOAD_LINK_BROKEN_ERROR = 29;
		const VK_UPLOAD_INTERNAL_ERROR = 30;
		const VK_UPLOAD_FILE_UNSUPPORTED_TYPE_FORMAT = 31;

		const VK_AUDIO_BITRATE_COULD_NOT_GET_AUDIO = 40;
		const VK_AUDIO_BITRATE_SOCKET_ERROR = 41;
		const VK_AUDIO_BITRATE_NOT_CONTENT_SIZE = 42;

		const VK_FIX_AUDIO_FAILED = 45;
		const VK_FIX_AUDIO_UNSUPPORTED = 46;

		const THEME_MAX_COUNT_OF_THEMES = 50;
		const THEME_INCORRECT_CSS = 51;
		const THEME_NOT_FOUND = 52;
		const THEME_ACCESS_FORBIDDEN = 53;

	}