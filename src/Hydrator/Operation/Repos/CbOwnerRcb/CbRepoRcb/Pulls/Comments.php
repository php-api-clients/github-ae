<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Comments implements ObjectMapper
{
    private array $hydrationStack = [];
    public function __construct() {}

    /**
     * @template T of object
     * @param class-string<T> $className
     * @return T
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match($className) {
            'ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestReviewComment($payload),
                'ApiClients\Client\GitHubAE\Schema\SimpleUser' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️SimpleUser($payload),
                'ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment\Links' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestReviewComment⚡️Links($payload),
                'ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment\Links\Self_' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestReviewComment⚡️Links⚡️Self_($payload),
                'ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment\Links\Html' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestReviewComment⚡️Links⚡️Html($payload),
                'ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment\Links\PullRequest' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestReviewComment⚡️Links⚡️PullRequest($payload),
                'ApiClients\Client\GitHubAE\Schema\ReactionRollup' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ReactionRollup($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestReviewComment(array $payload): \ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['pull_request_review_id'] ?? null;
    
                if ($value === null) {
                    $properties['pull_request_review_id'] = null;
                    goto after_pull_request_review_id;
                }

                $properties['pull_request_review_id'] = $value;
    
                after_pull_request_review_id:

                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $properties['id'] = null;
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['node_id'] ?? null;
    
                if ($value === null) {
                    $properties['node_id'] = null;
                    goto after_node_id;
                }

                $properties['node_id'] = $value;
    
                after_node_id:

                $value = $payload['diff_hunk'] ?? null;
    
                if ($value === null) {
                    $properties['diff_hunk'] = null;
                    goto after_diff_hunk;
                }

                $properties['diff_hunk'] = $value;
    
                after_diff_hunk:

                $value = $payload['path'] ?? null;
    
                if ($value === null) {
                    $properties['path'] = null;
                    goto after_path;
                }

                $properties['path'] = $value;
    
                after_path:

                $value = $payload['position'] ?? null;
    
                if ($value === null) {
                    $properties['position'] = null;
                    goto after_position;
                }

                $properties['position'] = $value;
    
                after_position:

                $value = $payload['original_position'] ?? null;
    
                if ($value === null) {
                    $properties['original_position'] = null;
                    goto after_original_position;
                }

                $properties['original_position'] = $value;
    
                after_original_position:

                $value = $payload['commit_id'] ?? null;
    
                if ($value === null) {
                    $properties['commit_id'] = null;
                    goto after_commit_id;
                }

                $properties['commit_id'] = $value;
    
                after_commit_id:

                $value = $payload['original_commit_id'] ?? null;
    
                if ($value === null) {
                    $properties['original_commit_id'] = null;
                    goto after_original_commit_id;
                }

                $properties['original_commit_id'] = $value;
    
                after_original_commit_id:

                $value = $payload['in_reply_to_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'in_reply_to_id';
                    goto after_in_reply_to_id;
                }

                $properties['in_reply_to_id'] = $value;
    
                after_in_reply_to_id:

                $value = $payload['user'] ?? null;
    
                if ($value === null) {
                    $properties['user'] = null;
                    goto after_user;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'user';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️SimpleUser($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['user'] = $value;
    
                after_user:

                $value = $payload['body'] ?? null;
    
                if ($value === null) {
                    $properties['body'] = null;
                    goto after_body;
                }

                $properties['body'] = $value;
    
                after_body:

                $value = $payload['created_at'] ?? null;
    
                if ($value === null) {
                    $properties['created_at'] = null;
                    goto after_created_at;
                }

                $properties['created_at'] = $value;
    
                after_created_at:

                $value = $payload['updated_at'] ?? null;
    
                if ($value === null) {
                    $properties['updated_at'] = null;
                    goto after_updated_at;
                }

                $properties['updated_at'] = $value;
    
                after_updated_at:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $properties['html_url'] = null;
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['pull_request_url'] ?? null;
    
                if ($value === null) {
                    $properties['pull_request_url'] = null;
                    goto after_pull_request_url;
                }

                $properties['pull_request_url'] = $value;
    
                after_pull_request_url:

                $value = $payload['author_association'] ?? null;
    
                if ($value === null) {
                    $properties['author_association'] = null;
                    goto after_author_association;
                }

                $properties['author_association'] = $value;
    
                after_author_association:

                $value = $payload['_links'] ?? null;
    
                if ($value === null) {
                    $properties['_links'] = null;
                    goto after__links;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = '_links';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestReviewComment⚡️Links($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['_links'] = $value;
    
                after__links:

                $value = $payload['start_line'] ?? null;
    
                if ($value === null) {
                    $properties['start_line'] = null;
                    goto after_start_line;
                }

                $properties['start_line'] = $value;
    
                after_start_line:

                $value = $payload['original_start_line'] ?? null;
    
                if ($value === null) {
                    $properties['original_start_line'] = null;
                    goto after_original_start_line;
                }

                $properties['original_start_line'] = $value;
    
                after_original_start_line:

                $value = $payload['start_side'] ?? null;
    
                if ($value === null) {
                    $properties['start_side'] = null;
                    goto after_start_side;
                }

                $properties['start_side'] = $value;
    
                after_start_side:

                $value = $payload['line'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'line';
                    goto after_line;
                }

                $properties['line'] = $value;
    
                after_line:

                $value = $payload['original_line'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'original_line';
                    goto after_original_line;
                }

                $properties['original_line'] = $value;
    
                after_original_line:

                $value = $payload['side'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'side';
                    goto after_side;
                }

                $properties['side'] = $value;
    
                after_side:

                $value = $payload['reactions'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'reactions';
                    goto after_reactions;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'reactions';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ReactionRollup($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['reactions'] = $value;
    
                after_reactions:

                $value = $payload['body_html'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'body_html';
                    goto after_body_html;
                }

                $properties['body_html'] = $value;
    
                after_body_html:

                $value = $payload['body_text'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'body_text';
                    goto after_body_text;
                }

                $properties['body_text'] = $value;
    
                after_body_text:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️SimpleUser(array $payload): \ApiClients\Client\GitHubAE\Schema\SimpleUser
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['email'] ?? null;
    
                if ($value === null) {
                    $properties['email'] = null;
                    goto after_email;
                }

                $properties['email'] = $value;
    
                after_email:

                $value = $payload['login'] ?? null;
    
                if ($value === null) {
                    $properties['login'] = null;
                    goto after_login;
                }

                $properties['login'] = $value;
    
                after_login:

                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $properties['id'] = null;
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['node_id'] ?? null;
    
                if ($value === null) {
                    $properties['node_id'] = null;
                    goto after_node_id;
                }

                $properties['node_id'] = $value;
    
                after_node_id:

                $value = $payload['avatar_url'] ?? null;
    
                if ($value === null) {
                    $properties['avatar_url'] = null;
                    goto after_avatar_url;
                }

                $properties['avatar_url'] = $value;
    
                after_avatar_url:

                $value = $payload['gravatar_id'] ?? null;
    
                if ($value === null) {
                    $properties['gravatar_id'] = null;
                    goto after_gravatar_id;
                }

                $properties['gravatar_id'] = $value;
    
                after_gravatar_id:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $properties['html_url'] = null;
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['followers_url'] ?? null;
    
                if ($value === null) {
                    $properties['followers_url'] = null;
                    goto after_followers_url;
                }

                $properties['followers_url'] = $value;
    
                after_followers_url:

                $value = $payload['following_url'] ?? null;
    
                if ($value === null) {
                    $properties['following_url'] = null;
                    goto after_following_url;
                }

                $properties['following_url'] = $value;
    
                after_following_url:

                $value = $payload['gists_url'] ?? null;
    
                if ($value === null) {
                    $properties['gists_url'] = null;
                    goto after_gists_url;
                }

                $properties['gists_url'] = $value;
    
                after_gists_url:

                $value = $payload['starred_url'] ?? null;
    
                if ($value === null) {
                    $properties['starred_url'] = null;
                    goto after_starred_url;
                }

                $properties['starred_url'] = $value;
    
                after_starred_url:

                $value = $payload['subscriptions_url'] ?? null;
    
                if ($value === null) {
                    $properties['subscriptions_url'] = null;
                    goto after_subscriptions_url;
                }

                $properties['subscriptions_url'] = $value;
    
                after_subscriptions_url:

                $value = $payload['organizations_url'] ?? null;
    
                if ($value === null) {
                    $properties['organizations_url'] = null;
                    goto after_organizations_url;
                }

                $properties['organizations_url'] = $value;
    
                after_organizations_url:

                $value = $payload['repos_url'] ?? null;
    
                if ($value === null) {
                    $properties['repos_url'] = null;
                    goto after_repos_url;
                }

                $properties['repos_url'] = $value;
    
                after_repos_url:

                $value = $payload['events_url'] ?? null;
    
                if ($value === null) {
                    $properties['events_url'] = null;
                    goto after_events_url;
                }

                $properties['events_url'] = $value;
    
                after_events_url:

                $value = $payload['received_events_url'] ?? null;
    
                if ($value === null) {
                    $properties['received_events_url'] = null;
                    goto after_received_events_url;
                }

                $properties['received_events_url'] = $value;
    
                after_received_events_url:

                $value = $payload['type'] ?? null;
    
                if ($value === null) {
                    $properties['type'] = null;
                    goto after_type;
                }

                $properties['type'] = $value;
    
                after_type:

                $value = $payload['site_admin'] ?? null;
    
                if ($value === null) {
                    $properties['site_admin'] = null;
                    goto after_site_admin;
                }

                $properties['site_admin'] = $value;
    
                after_site_admin:

                $value = $payload['starred_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'starred_at';
                    goto after_starred_at;
                }

                $properties['starred_at'] = $value;
    
                after_starred_at:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\SimpleUser', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\SimpleUser::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\SimpleUser(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\SimpleUser', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestReviewComment⚡️Links(array $payload): \ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment\Links
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['self'] ?? null;
    
                if ($value === null) {
                    $properties['self'] = null;
                    goto after_self;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'self';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestReviewComment⚡️Links⚡️Self_($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['self'] = $value;
    
                after_self:

                $value = $payload['html'] ?? null;
    
                if ($value === null) {
                    $properties['html'] = null;
                    goto after_html;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'html';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestReviewComment⚡️Links⚡️Html($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['html'] = $value;
    
                after_html:

                $value = $payload['pull_request'] ?? null;
    
                if ($value === null) {
                    $properties['pull_request'] = null;
                    goto after_pull_request;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'pull_request';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestReviewComment⚡️Links⚡️PullRequest($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['pull_request'] = $value;
    
                after_pull_request:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment\Links', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment\Links::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment\Links(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment\Links', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestReviewComment⚡️Links⚡️Self_(array $payload): \ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment\Links\Self_
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['href'] ?? null;
    
                if ($value === null) {
                    $properties['href'] = null;
                    goto after_href;
                }

                $properties['href'] = $value;
    
                after_href:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment\Links\Self_', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment\Links\Self_::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment\Links\Self_(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment\Links\Self_', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestReviewComment⚡️Links⚡️Html(array $payload): \ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment\Links\Html
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['href'] ?? null;
    
                if ($value === null) {
                    $properties['href'] = null;
                    goto after_href;
                }

                $properties['href'] = $value;
    
                after_href:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment\Links\Html', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment\Links\Html::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment\Links\Html(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment\Links\Html', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestReviewComment⚡️Links⚡️PullRequest(array $payload): \ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment\Links\PullRequest
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['href'] ?? null;
    
                if ($value === null) {
                    $properties['href'] = null;
                    goto after_href;
                }

                $properties['href'] = $value;
    
                after_href:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment\Links\PullRequest', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment\Links\PullRequest::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment\Links\PullRequest(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment\Links\PullRequest', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ReactionRollup(array $payload): \ApiClients\Client\GitHubAE\Schema\ReactionRollup
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['total_count'] ?? null;
    
                if ($value === null) {
                    $properties['total_count'] = null;
                    goto after_total_count;
                }

                $properties['total_count'] = $value;
    
                after_total_count:

                $value = $payload['__p_l_u_s_e_s_1'] ?? null;
    
                if ($value === null) {
                    $properties['_PLUSES_1'] = null;
                    goto after__PLUSES_1;
                }

                $properties['_PLUSES_1'] = $value;
    
                after__PLUSES_1:

                $value = $payload['__m_i_n_u_s_1'] ?? null;
    
                if ($value === null) {
                    $properties['_MINUS_1'] = null;
                    goto after__MINUS_1;
                }

                $properties['_MINUS_1'] = $value;
    
                after__MINUS_1:

                $value = $payload['laugh'] ?? null;
    
                if ($value === null) {
                    $properties['laugh'] = null;
                    goto after_laugh;
                }

                $properties['laugh'] = $value;
    
                after_laugh:

                $value = $payload['confused'] ?? null;
    
                if ($value === null) {
                    $properties['confused'] = null;
                    goto after_confused;
                }

                $properties['confused'] = $value;
    
                after_confused:

                $value = $payload['heart'] ?? null;
    
                if ($value === null) {
                    $properties['heart'] = null;
                    goto after_heart;
                }

                $properties['heart'] = $value;
    
                after_heart:

                $value = $payload['hooray'] ?? null;
    
                if ($value === null) {
                    $properties['hooray'] = null;
                    goto after_hooray;
                }

                $properties['hooray'] = $value;
    
                after_hooray:

                $value = $payload['eyes'] ?? null;
    
                if ($value === null) {
                    $properties['eyes'] = null;
                    goto after_eyes;
                }

                $properties['eyes'] = $value;
    
                after_eyes:

                $value = $payload['rocket'] ?? null;
    
                if ($value === null) {
                    $properties['rocket'] = null;
                    goto after_rocket;
                }

                $properties['rocket'] = $value;
    
                after_rocket:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ReactionRollup', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\ReactionRollup::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\ReactionRollup(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\ReactionRollup', $exception, stack: $this->hydrationStack);
            }
        }
    
    public function serializeObject(object $object): mixed
    {
        try {
            $className = get_class($object);

            return match($className) {
                'array' => $this->serializeValuearray($object),
                'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
                'DateTime' => $this->serializeValueDateTime($object),
                'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
                'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
                'ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestReviewComment($object),
                'ApiClients\Client\GitHubAE\Schema\SimpleUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️SimpleUser($object),
                'ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment\Links' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestReviewComment⚡️Links($object),
                'ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment\Links\Self_' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestReviewComment⚡️Links⚡️Self_($object),
                'ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment\Links\Html' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestReviewComment⚡️Links⚡️Html($object),
                'ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment\Links\PullRequest' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestReviewComment⚡️Links⚡️PullRequest($object),
                'ApiClients\Client\GitHubAE\Schema\ReactionRollup' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ReactionRollup($object),
                default => throw new \LogicException('No serialization defined for $className'),
            };
        } catch (\Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }
    
    
    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestReviewComment(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment);
        $result = [];
        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $pull_request_review_id = $object->pull_request_review_id;

        if ($pull_request_review_id === null) {
            goto after_pull_request_review_id;
        }
        after_pull_request_review_id:        $result['pull_request_review_id'] = $pull_request_review_id;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $node_id = $object->node_id;

        if ($node_id === null) {
            goto after_node_id;
        }
        after_node_id:        $result['node_id'] = $node_id;

        
        $diff_hunk = $object->diff_hunk;

        if ($diff_hunk === null) {
            goto after_diff_hunk;
        }
        after_diff_hunk:        $result['diff_hunk'] = $diff_hunk;

        
        $path = $object->path;

        if ($path === null) {
            goto after_path;
        }
        after_path:        $result['path'] = $path;

        
        $position = $object->position;

        if ($position === null) {
            goto after_position;
        }
        after_position:        $result['position'] = $position;

        
        $original_position = $object->original_position;

        if ($original_position === null) {
            goto after_original_position;
        }
        after_original_position:        $result['original_position'] = $original_position;

        
        $commit_id = $object->commit_id;

        if ($commit_id === null) {
            goto after_commit_id;
        }
        after_commit_id:        $result['commit_id'] = $commit_id;

        
        $original_commit_id = $object->original_commit_id;

        if ($original_commit_id === null) {
            goto after_original_commit_id;
        }
        after_original_commit_id:        $result['original_commit_id'] = $original_commit_id;

        
        $in_reply_to_id = $object->in_reply_to_id;
        after_in_reply_to_id:        $result['in_reply_to_id'] = $in_reply_to_id;

        
        $user = $object->user;

        if ($user === null) {
            goto after_user;
        }
        $user = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️SimpleUser($user);
        after_user:        $result['user'] = $user;

        
        $body = $object->body;

        if ($body === null) {
            goto after_body;
        }
        after_body:        $result['body'] = $body;

        
        $created_at = $object->created_at;

        if ($created_at === null) {
            goto after_created_at;
        }
        after_created_at:        $result['created_at'] = $created_at;

        
        $updated_at = $object->updated_at;

        if ($updated_at === null) {
            goto after_updated_at;
        }
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $pull_request_url = $object->pull_request_url;

        if ($pull_request_url === null) {
            goto after_pull_request_url;
        }
        after_pull_request_url:        $result['pull_request_url'] = $pull_request_url;

        
        $author_association = $object->author_association;

        if ($author_association === null) {
            goto after_author_association;
        }
        after_author_association:        $result['author_association'] = $author_association;

        
        $_links = $object->_links;

        if ($_links === null) {
            goto after__links;
        }
        $_links = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestReviewComment⚡️Links($_links);
        after__links:        $result['_links'] = $_links;

        
        $start_line = $object->start_line;

        if ($start_line === null) {
            goto after_start_line;
        }
        after_start_line:        $result['start_line'] = $start_line;

        
        $original_start_line = $object->original_start_line;

        if ($original_start_line === null) {
            goto after_original_start_line;
        }
        after_original_start_line:        $result['original_start_line'] = $original_start_line;

        
        $start_side = $object->start_side;

        if ($start_side === null) {
            goto after_start_side;
        }
        after_start_side:        $result['start_side'] = $start_side;

        
        $line = $object->line;
        after_line:        $result['line'] = $line;

        
        $original_line = $object->original_line;
        after_original_line:        $result['original_line'] = $original_line;

        
        $side = $object->side;
        after_side:        $result['side'] = $side;

        
        $reactions = $object->reactions;
        $reactions = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ReactionRollup($reactions);
        after_reactions:        $result['reactions'] = $reactions;

        
        $body_html = $object->body_html;
        after_body_html:        $result['body_html'] = $body_html;

        
        $body_text = $object->body_text;
        after_body_text:        $result['body_text'] = $body_text;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️SimpleUser(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\SimpleUser);
        $result = [];
        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }
        after_email:        $result['email'] = $email;

        
        $login = $object->login;

        if ($login === null) {
            goto after_login;
        }
        after_login:        $result['login'] = $login;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $node_id = $object->node_id;

        if ($node_id === null) {
            goto after_node_id;
        }
        after_node_id:        $result['node_id'] = $node_id;

        
        $avatar_url = $object->avatar_url;

        if ($avatar_url === null) {
            goto after_avatar_url;
        }
        after_avatar_url:        $result['avatar_url'] = $avatar_url;

        
        $gravatar_id = $object->gravatar_id;

        if ($gravatar_id === null) {
            goto after_gravatar_id;
        }
        after_gravatar_id:        $result['gravatar_id'] = $gravatar_id;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $followers_url = $object->followers_url;

        if ($followers_url === null) {
            goto after_followers_url;
        }
        after_followers_url:        $result['followers_url'] = $followers_url;

        
        $following_url = $object->following_url;

        if ($following_url === null) {
            goto after_following_url;
        }
        after_following_url:        $result['following_url'] = $following_url;

        
        $gists_url = $object->gists_url;

        if ($gists_url === null) {
            goto after_gists_url;
        }
        after_gists_url:        $result['gists_url'] = $gists_url;

        
        $starred_url = $object->starred_url;

        if ($starred_url === null) {
            goto after_starred_url;
        }
        after_starred_url:        $result['starred_url'] = $starred_url;

        
        $subscriptions_url = $object->subscriptions_url;

        if ($subscriptions_url === null) {
            goto after_subscriptions_url;
        }
        after_subscriptions_url:        $result['subscriptions_url'] = $subscriptions_url;

        
        $organizations_url = $object->organizations_url;

        if ($organizations_url === null) {
            goto after_organizations_url;
        }
        after_organizations_url:        $result['organizations_url'] = $organizations_url;

        
        $repos_url = $object->repos_url;

        if ($repos_url === null) {
            goto after_repos_url;
        }
        after_repos_url:        $result['repos_url'] = $repos_url;

        
        $events_url = $object->events_url;

        if ($events_url === null) {
            goto after_events_url;
        }
        after_events_url:        $result['events_url'] = $events_url;

        
        $received_events_url = $object->received_events_url;

        if ($received_events_url === null) {
            goto after_received_events_url;
        }
        after_received_events_url:        $result['received_events_url'] = $received_events_url;

        
        $type = $object->type;

        if ($type === null) {
            goto after_type;
        }
        after_type:        $result['type'] = $type;

        
        $site_admin = $object->site_admin;

        if ($site_admin === null) {
            goto after_site_admin;
        }
        after_site_admin:        $result['site_admin'] = $site_admin;

        
        $starred_at = $object->starred_at;
        after_starred_at:        $result['starred_at'] = $starred_at;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestReviewComment⚡️Links(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment\Links);
        $result = [];
        
        $self = $object->self;

        if ($self === null) {
            goto after_self;
        }
        $self = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestReviewComment⚡️Links⚡️Self_($self);
        after_self:        $result['self'] = $self;

        
        $html = $object->html;

        if ($html === null) {
            goto after_html;
        }
        $html = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestReviewComment⚡️Links⚡️Html($html);
        after_html:        $result['html'] = $html;

        
        $pull_request = $object->pull_request;

        if ($pull_request === null) {
            goto after_pull_request;
        }
        $pull_request = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestReviewComment⚡️Links⚡️PullRequest($pull_request);
        after_pull_request:        $result['pull_request'] = $pull_request;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestReviewComment⚡️Links⚡️Self_(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment\Links\Self_);
        $result = [];
        
        $href = $object->href;

        if ($href === null) {
            goto after_href;
        }
        after_href:        $result['href'] = $href;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestReviewComment⚡️Links⚡️Html(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment\Links\Html);
        $result = [];
        
        $href = $object->href;

        if ($href === null) {
            goto after_href;
        }
        after_href:        $result['href'] = $href;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PullRequestReviewComment⚡️Links⚡️PullRequest(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment\Links\PullRequest);
        $result = [];
        
        $href = $object->href;

        if ($href === null) {
            goto after_href;
        }
        after_href:        $result['href'] = $href;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️ReactionRollup(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\ReactionRollup);
        $result = [];
        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $total_count = $object->total_count;

        if ($total_count === null) {
            goto after_total_count;
        }
        after_total_count:        $result['total_count'] = $total_count;

        
        $_PLUSES_1 = $object->_PLUSES_1;

        if ($_PLUSES_1 === null) {
            goto after__PLUSES_1;
        }
        after__PLUSES_1:        $result['__p_l_u_s_e_s_1'] = $_PLUSES_1;

        
        $_MINUS_1 = $object->_MINUS_1;

        if ($_MINUS_1 === null) {
            goto after__MINUS_1;
        }
        after__MINUS_1:        $result['__m_i_n_u_s_1'] = $_MINUS_1;

        
        $laugh = $object->laugh;

        if ($laugh === null) {
            goto after_laugh;
        }
        after_laugh:        $result['laugh'] = $laugh;

        
        $confused = $object->confused;

        if ($confused === null) {
            goto after_confused;
        }
        after_confused:        $result['confused'] = $confused;

        
        $heart = $object->heart;

        if ($heart === null) {
            goto after_heart;
        }
        after_heart:        $result['heart'] = $heart;

        
        $hooray = $object->hooray;

        if ($hooray === null) {
            goto after_hooray;
        }
        after_hooray:        $result['hooray'] = $hooray;

        
        $eyes = $object->eyes;

        if ($eyes === null) {
            goto after_eyes;
        }
        after_eyes:        $result['eyes'] = $eyes;

        
        $rocket = $object->rocket;

        if ($rocket === null) {
            goto after_rocket;
        }
        after_rocket:        $result['rocket'] = $rocket;


        return $result;
    }
    
    

    /**
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
     */
    public function hydrateObjects(string $className, iterable $payloads): IterableList
    {
        return new IterableList($this->doHydrateObjects($className, $payloads));
    }

    private function doHydrateObjects(string $className, iterable $payloads): Generator
    {
        foreach ($payloads as $index => $payload) {
            yield $index => $this->hydrateObject($className, $payload);
        }
    }

    /**
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
     */
    public function serializeObjects(iterable $payloads): IterableList
    {
        return new IterableList($this->doSerializeObjects($payloads));
    }

    private function doSerializeObjects(iterable $objects): Generator
    {
        foreach ($objects as $index => $object) {
            yield $index => $this->serializeObject($object);
        }
    }
}
