<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license.
 */

return [
    'service_manager' => [
        'factories' => [
            'ZfrPrerender\Mvc\PrerenderListener' => 'ZfrPrerender\Factory\PrerenderListenerFactory',
            'ZfrPrerender\Options\ModuleOptions' => 'ZfrPrerender\Factory\ModuleOptionsFactory'
        ]
    ],

    'zfr_prerender' => [
        // Prerender service URL
        'prerender_url' => 'http://service.prerender.io',

        // Some widely used crawler user agents (Google Bot, Yahoo and BingBot are not in this list because
        // we support _escaped_fragment_ and want to ensure people aren't penalized for cloaking).
        'crawler_user_agents' => [
            'baiduspider',
            'facebookexternalhit',
            'twitterbot',
            'rogerbot',
            'linkedinbot',
            'embedly',
            'bufferbot',
            'quora link preview',
            'showyoubot',
            'outbrain'
        ],

        // Ignored extensions
        'ignored_extensions' => [
            '.js',
            '.css',
            '.less',
            '.png',
            '.jpg',
            '.jpeg',
            '.gif',
            '.pdf',
            '.doc',
            '.txt',
            '.zip',
            '.mp3',
            '.rar',
            '.exe',
            '.wmv',
            '.doc',
            '.avi',
            '.ppt',
            '.mpg',
            '.mpeg',
            '.tif',
            '.wav',
            '.mov',
            '.psd',
            '.ai',
            '.xls',
            '.mp4',
            '.m4a',
            '.swf',
            '.dat',
            '.dmg',
            '.iso',
            '.flv',
            '.m4v',
            '.torrent',
            '.xml'
        ],

        // HTTP client options
        'http_client_options' => [],

        // Whitelist and blacklist URLs
        'whitelist_urls' => [],
        'blacklist_urls' => [],

    ]
];
