(function () {
    'use strict';

    var _channelsList = document.getElementById('ws-channels-list');
    var _connectionStatus = document.getElementById('ws-connection-status');
    var _userName = document.getElementById('ws-username');
    var _textInput = document.getElementById('ws-content-to-send');
    var _textSender = document.getElementById('ws-send-content');
    var enterKeyCode = 13;
    var _receiver = document.getElementById('ws-content-receiver');


    var defaultChannel = 'general';
    var botName = 'ChatBot';
    var userName = '';

    var sendTextInputContent = function () {
        // Get text input content
        var content = _textInput.value;

        // Check content
        if (content.length < 1) {
            // Don't send content
            e.preventDefault();
            return false;
        }

        // Send it to WS
        ws.send(JSON.stringify({
            action: 'message',
            user: userName,
            message: content,
            channel: 'general'
        }));

        // Reset input
        _textInput.value = '';

        // Prevent default behavior
        e.preventDefault();
        return false;
    };


    /**
     * Add channel in channels list
     *
     * @param {string} channel - Channel name
     */
    var addChannel = function addChannel(channel) {
        // Initialize
        var _channel = '#' + channel;

        // Add channel to list
        _channelsList.innerHTML += '<li>' +
            '<a href="' + _channel + '">' + _channel + '</a>' +
            '</li>';
    };

    /**
     * Activate a given channel
     *
     * @param {string} channel - Channel name
     */
    var activateChannel = function activateChannel(channel) {
        // Initialize
        var _channel = '#' + channel;

        // Get channel
        var _chanLink = document.querySelectorAll('a[href="' + _channel + '"]');

        // Activate parent list item
        _chanLink[0].parentElement.classList.add('active');
    };

    var addMessageToChannel = function(message) {
        // Initialize
        var _message = JSON.parse(message);
        var liClass = 'message' + (_message.user === userName ? ' mine' : '');

        // Check message class
        if (_message.hasOwnProperty('messageClass')) {
            liClass += ' ' + _message.messageClass;
        }

        // Update messages list
        _receiver.innerHTML += '<li class="' + liClass + '">' +
            '<strong>' + _message.user + '</strong>: ' + _message.message +
            '</li>';
    };

    /**
     * Send a message from ChatBot to #general channel
     *
     * @param {string} message - Message to display
     * @param {string} messageClass - CSS class to add to message
     */
    var botMessageToGeneral = function (message,messageClass) {
        return addMessageToChannel(JSON.stringify({
            action: 'message',
            channel: defaultChannel,
            user: botName,
            message: message,
            messageClass : messageClass
        }));
    };

    /**
     * "Disable" form input and button
     */
    var disableFormAndWsConnection = function disableFormAndWsConnection () {
        // Disable form input and button
        _textInput.classList.add('disabled');
        _textSender.classList.add('disabled');

        // Mark connection has offline
        _connectionStatus.classList.remove('active');
    };

    // Ask user's name
    while (userName === null || userName.length === 0) {
        userName = prompt('Hi! I need your name for the Chat please :)');
    }
    // Update user's name
    _userName.innerHTML = userName;

    var ws = new WebSocket('ws://' + wsUrl);
    botMessageToGeneral('Connecting...', '');

    /**
     * On connection open
     */
    ws.onopen = function () {
        _connectionStatus.classList.add('active');
        _textInput.classList.remove('disabled');
        _textSender.classList.remove('disabled');

        // Add default channel in channels list
        addChannel(defaultChannel);
        activateChannel(defaultChannel);

        ws.send(JSON.stringify({
            action: 'subscribe',
            channel: defaultChannel,
            user: userName
        }));
    };

    /**
     * On message reception
     *
     * @param event
     */
    ws.onmessage = function (event) {
        addMessageToChannel(event.data);
    };

    /**
     * On connection close
     */
    ws.onclose = function () {
        botMessageToGeneral('Connection closed');
        disableFormAndWsConnection();
    };

    /**
     * On connection error
     */
    ws.onerror = function () {
        botMessageToGeneral('An error occured!');
        disableFormAndWsConnection();
    };


    _textSender.onclick = sendTextInputContent;
    _textInput.onkeyup = function(e) {
        // Check for Enter key
        if (e.keyCode === enterKeyCode) {
            sendTextInputContent();
        }
    };

})();