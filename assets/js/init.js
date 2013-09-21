

var userFeed = new Instafeed({
        get: 'user',
        userId: 250624561,
        accessToken: '250624561.467ede5.51147613464f4f408886a09b033dd2e0',
        clientId: 'ddf0a48f6d8f4239a9c20333019bf3e2',
        limit: '12',
        sortBy: 'most-liked'
    });
    userFeed.run();

$(function() {
				Grid.init();
			});